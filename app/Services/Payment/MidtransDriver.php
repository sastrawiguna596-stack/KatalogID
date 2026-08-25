<?php

namespace App\Services\Payment;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MidtransDriver implements PaymentDriverInterface
{
    protected $serverKey;
    protected $clientKey;
    protected $isProduction;
    protected $baseUrl;

    public function __construct()
    {
        $this->serverKey = config('payment.drivers.midtrans.server_key');
        $this->clientKey = config('payment.drivers.midtrans.client_key');
        $this->isProduction = config('payment.drivers.midtrans.is_production', false);
        $this->baseUrl = $this->isProduction 
            ? 'https://app.midtrans.com/snap/v1/transactions' 
            : 'https://app.sandbox.midtrans.com/snap/v1/transactions';
    }

    public function createTransaction(Order $order, array $params = []): array
    {
        // Jika Server Key Midtrans belum diisi di .env, tampilkan instruksi siap-pakai
        if (empty($this->serverKey)) {
            return [
                'success' => true,
                'payment_gateway' => 'midtrans',
                'payment_reference' => 'MIDTRANS-' . $order->kode_transaksi,
                'payment_url' => route('payment.page', $order->id),
                'payment_token' => 'MOCK-SNAP-TOKEN-' . $order->id,
                'status' => 'pending',
                'message' => 'API Key Midtrans belum dikonfigurasi di .env. Menggunakan mode simulasi Midtrans.',
            ];
        }

        $items = [];
        foreach ($order->items as $item) {
            $items[] = [
                'id' => (string) $item->product_id,
                'price' => (int) round($item->harga_satuan),
                'quantity' => (int) $item->jumlah,
                'name' => mb_substr($item->product->nama_produk ?? 'Produk', 0, 50),
            ];
        }

        // Tambah ongkos kirim jika ada
        if ($order->shipping_cost > 0) {
            $items[] = [
                'id' => 'SHIPPING',
                'price' => (int) round($order->shipping_cost),
                'quantity' => 1,
                'name' => 'Ongkos Kirim (' . ($order->courier_company ?? 'Kurir') . ')',
            ];
        }

        // Tambah biaya operasional jika ada
        $biayaOperasional = 1000;
        $items[] = [
            'id' => 'FEE',
            'price' => $biayaOperasional,
            'quantity' => 1,
            'name' => 'Biaya Operasional',
        ];

        $payload = [
            'transaction_details' => [
                'order_id' => $order->kode_transaksi,
                'gross_amount' => (int) round($order->total_harga),
            ],
            'item_details' => $items,
            'customer_details' => [
                'first_name' => $order->user->name ?? 'Pembeli',
                'email' => $order->user->email ?? 'buyer@katalog.idn',
                'phone' => $order->user->phone ?? '08123456789',
            ],
            'callbacks' => [
                'finish' => route('payment.page', $order->id),
            ],
        ];

        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic ' . base64_encode($this->serverKey . ':'),
            ])->post($this->baseUrl, $payload);

            $result = $response->json();

            if ($response->successful() && isset($result['token'])) {
                return [
                    'success' => true,
                    'payment_gateway' => 'midtrans',
                    'payment_reference' => $order->kode_transaksi,
                    'payment_url' => $result['redirect_url'] ?? '',
                    'payment_token' => $result['token'],
                    'status' => 'pending',
                    'message' => 'Snap Token Midtrans berhasil dibuat.',
                ];
            }

            Log::error('Midtrans API Error', ['response' => $result]);

            return [
                'success' => false,
                'payment_gateway' => 'midtrans',
                'payment_reference' => '',
                'payment_url' => '',
                'payment_token' => '',
                'status' => 'failed',
                'message' => $result['error_messages'][0] ?? 'Gagal membuat transaksi Midtrans.',
            ];
        } catch (\Exception $e) {
            Log::error('Midtrans Exception: ' . $e->getMessage());

            return [
                'success' => false,
                'payment_gateway' => 'midtrans',
                'payment_reference' => '',
                'payment_url' => '',
                'payment_token' => '',
                'status' => 'failed',
                'message' => 'Terjadi kesalahan koneksi ke Midtrans: ' . $e->getMessage(),
            ];
        }
    }

    public function handleWebhook(Request $request): array
    {
        $payload = $request->all();
        $orderId = $payload['order_id'] ?? null;
        $transactionStatus = $payload['transaction_status'] ?? null;
        $fraudStatus = $payload['fraud_status'] ?? null;

        $status = 'pending';
        if ($transactionStatus == 'capture') {
            if ($fraudStatus == 'challenge') {
                $status = 'pending';
            } else if ($fraudStatus == 'accept') {
                $status = 'paid';
            }
        } else if ($transactionStatus == 'settlement') {
            $status = 'paid';
        } else if ($transactionStatus == 'cancel' || $transactionStatus == 'deny' || $transactionStatus == 'expire') {
            $status = 'failed';
        } else if ($transactionStatus == 'pending') {
            $status = 'pending';
        }

        return [
            'success' => true,
            'kode_transaksi' => $orderId,
            'status' => $status,
            'raw' => $payload,
            'message' => 'Webhook Midtrans berhasil diproses.',
        ];
    }

    public function checkStatus(Order $order): array
    {
        if (empty($this->serverKey)) {
            return ['status' => $order->status_pembayaran, 'raw' => []];
        }

        $url = $this->isProduction 
            ? "https://api.midtrans.com/v2/{$order->kode_transaksi}/status"
            : "https://api.sandbox.midtrans.com/v2/{$order->kode_transaksi}/status";

        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Basic ' . base64_encode($this->serverKey . ':'),
            ])->get($url);

            return ['status' => $response->json()['transaction_status'] ?? 'unknown', 'raw' => $response->json()];
        } catch (\Exception $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }
}
