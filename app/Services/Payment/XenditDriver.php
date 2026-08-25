<?php

namespace App\Services\Payment;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class XenditDriver implements PaymentDriverInterface
{
    protected $secretKey;
    protected $webhookToken;

    public function __construct()
    {
        $this->secretKey = config('payment.drivers.xendit.secret_key');
        $this->webhookToken = config('payment.drivers.xendit.webhook_token');
    }

    public function createTransaction(Order $order, array $params = []): array
    {
        if (empty($this->secretKey)) {
            return [
                'success' => true,
                'payment_gateway' => 'xendit',
                'payment_reference' => 'XENDIT-' . $order->kode_transaksi,
                'payment_url' => route('payment.page', $order->id),
                'payment_token' => 'MOCK-XENDIT-INVOICE-' . $order->id,
                'status' => 'pending',
                'message' => 'API Key Xendit belum dikonfigurasi di .env. Menggunakan mode simulasi Xendit.',
            ];
        }

        $payload = [
            'external_id' => $order->kode_transaksi,
            'amount' => (int) round($order->total_harga),
            'payer_email' => $order->user->email ?? 'buyer@katalog.idn',
            'description' => 'Pembayaran Pesanan #' . $order->kode_transaksi . ' di Katalog IDN',
            'success_redirect_url' => route('payment.page', $order->id),
            'failure_redirect_url' => route('payment.page', $order->id),
        ];

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Basic ' . base64_encode($this->secretKey . ':'),
            ])->post('https://api.xendit.co/v2/invoices', $payload);

            $result = $response->json();

            if ($response->successful() && isset($result['invoice_url'])) {
                return [
                    'success' => true,
                    'payment_gateway' => 'xendit',
                    'payment_reference' => $result['id'] ?? $order->kode_transaksi,
                    'payment_url' => $result['invoice_url'],
                    'payment_token' => $result['id'] ?? '',
                    'status' => 'pending',
                    'message' => 'Invoice Xendit berhasil dibuat.',
                ];
            }

            Log::error('Xendit API Error', ['response' => $result]);

            return [
                'success' => false,
                'payment_gateway' => 'xendit',
                'payment_reference' => '',
                'payment_url' => '',
                'payment_token' => '',
                'status' => 'failed',
                'message' => $result['message'] ?? 'Gagal membuat Invoice Xendit.',
            ];
        } catch (\Exception $e) {
            Log::error('Xendit Exception: ' . $e->getMessage());

            return [
                'success' => false,
                'payment_gateway' => 'xendit',
                'payment_reference' => '',
                'payment_url' => '',
                'payment_token' => '',
                'status' => 'failed',
                'message' => 'Terjadi kesalahan koneksi ke Xendit: ' . $e->getMessage(),
            ];
        }
    }

    public function handleWebhook(Request $request): array
    {
        $payload = $request->all();
        $externalId = $payload['external_id'] ?? null;
        $statusStr = strtolower($payload['status'] ?? '');

        $status = 'pending';
        if ($statusStr === 'paid' || $statusStr === 'settled') {
            $status = 'paid';
        } else if ($statusStr === 'expired' || $statusStr === 'failed') {
            $status = 'failed';
        }

        return [
            'success' => true,
            'kode_transaksi' => $externalId,
            'status' => $status,
            'raw' => $payload,
            'message' => 'Webhook Xendit berhasil diproses.',
        ];
    }

    public function checkStatus(Order $order): array
    {
        if (empty($this->secretKey) || empty($order->payment_reference)) {
            return ['status' => $order->status_pembayaran, 'raw' => []];
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Basic ' . base64_encode($this->secretKey . ':'),
            ])->get('https://api.xendit.co/v2/invoices/' . $order->payment_reference);

            return ['status' => $response->json()['status'] ?? 'unknown', 'raw' => $response->json()];
        } catch (\Exception $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }
}
