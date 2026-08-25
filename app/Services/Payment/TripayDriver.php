<?php

namespace App\Services\Payment;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TripayDriver implements PaymentDriverInterface
{
    protected $merchantCode;
    protected $apiKey;
    protected $privateKey;
    protected $isProduction;
    protected $baseUrl;

    public function __construct()
    {
        $this->merchantCode = config('payment.drivers.tripay.merchant_code');
        $this->apiKey = config('payment.drivers.tripay.api_key');
        $this->privateKey = config('payment.drivers.tripay.private_key');
        $this->isProduction = config('payment.drivers.tripay.is_production', false);
        $this->baseUrl = $this->isProduction 
            ? 'https://tripay.co.id/api/transaction/create'
            : 'https://tripay.co.id/api-sandbox/transaction/create';
    }

    public function createTransaction(Order $order, array $params = []): array
    {
        if (empty($this->apiKey) || empty($this->privateKey) || empty($this->merchantCode)) {
            return [
                'success' => true,
                'payment_gateway' => 'tripay',
                'payment_reference' => 'TRIPAY-' . $order->kode_transaksi,
                'payment_url' => route('payment.page', $order->id),
                'payment_token' => 'MOCK-TRIPAY-' . $order->id,
                'status' => 'pending',
                'message' => 'API Key Tripay belum dikonfigurasi di .env. Menggunakan mode simulasi Tripay.',
            ];
        }

        $method = $params['payment_method'] ?? 'QRIS';
        $amount = (int) round($order->total_harga);

        // Signature Tripay: merchant_code + merchant_ref + amount
        $signature = hash_hmac('sha256', $this->merchantCode . $order->kode_transaksi . $amount, $this->privateKey);

        $payload = [
            'method' => $method,
            'merchant_ref' => $order->kode_transaksi,
            'amount' => $amount,
            'customer_name' => $order->user->name ?? 'Pembeli',
            'customer_email' => $order->user->email ?? 'buyer@katalog.idn',
            'customer_phone' => $order->user->phone ?? '08123456789',
            'order_items' => [
                [
                    'name' => 'Pesanan #' . $order->kode_transaksi,
                    'price' => $amount,
                    'quantity' => 1,
                ]
            ],
            'return_url' => route('payment.page', $order->id),
            'signature' => $signature,
        ];

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
            ])->post($this->baseUrl, $payload);

            $result = $response->json();

            if ($response->successful() && isset($result['data']['checkout_url'])) {
                return [
                    'success' => true,
                    'payment_gateway' => 'tripay',
                    'payment_reference' => $result['data']['reference'] ?? $order->kode_transaksi,
                    'payment_url' => $result['data']['checkout_url'],
                    'payment_token' => $result['data']['reference'] ?? '',
                    'status' => 'pending',
                    'message' => 'Transaksi Tripay berhasil dibuat.',
                ];
            }

            Log::error('Tripay API Error', ['response' => $result]);

            return [
                'success' => false,
                'payment_gateway' => 'tripay',
                'payment_reference' => '',
                'payment_url' => '',
                'payment_token' => '',
                'status' => 'failed',
                'message' => $result['message'] ?? 'Gagal membuat transaksi Tripay.',
            ];
        } catch (\Exception $e) {
            Log::error('Tripay Exception: ' . $e->getMessage());

            return [
                'success' => false,
                'payment_gateway' => 'tripay',
                'payment_reference' => '',
                'payment_url' => '',
                'payment_token' => '',
                'status' => 'failed',
                'message' => 'Terjadi kesalahan koneksi ke Tripay: ' . $e->getMessage(),
            ];
        }
    }

    public function handleWebhook(Request $request): array
    {
        $payload = $request->all();
        $merchantRef = $payload['merchant_ref'] ?? null;
        $statusStr = strtoupper($payload['status'] ?? '');

        $status = 'pending';
        if ($statusStr === 'PAID') {
            $status = 'paid';
        } else if ($statusStr === 'EXPIRED' || $statusStr === 'FAILED') {
            $status = 'failed';
        }

        return [
            'success' => true,
            'kode_transaksi' => $merchantRef,
            'status' => $status,
            'raw' => $payload,
            'message' => 'Webhook Tripay berhasil diproses.',
        ];
    }

    public function checkStatus(Order $order): array
    {
        if (empty($this->apiKey) || empty($order->payment_reference)) {
            return ['status' => $order->status_pembayaran, 'raw' => []];
        }

        $url = $this->isProduction 
            ? 'https://tripay.co.id/api/transaction/detail?reference=' . $order->payment_reference
            : 'https://tripay.co.id/api-sandbox/transaction/detail?reference=' . $order->payment_reference;

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
            ])->get($url);

            return ['status' => $response->json()['data']['status'] ?? 'unknown', 'raw' => $response->json()];
        } catch (\Exception $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }
}
