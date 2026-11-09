<?php

namespace App\Services\Payment;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ZannpayDriver implements PaymentDriverInterface
{
    protected string $merchantId;
    protected string $secretKey;
    protected bool $isProduction;
    protected string $baseUrl = 'https://pay.zannstore.com/v1';

    public function __construct()
    {
        $this->merchantId  = config('payment.drivers.zannpay.merchant_id', '');
        $this->secretKey   = config('payment.drivers.zannpay.secret_key', '');
        $this->isProduction = config('payment.drivers.zannpay.is_production', false);
    }

    // -------------------------------------------------------
    // Helper: Buat Signature SHA-256
    // Rumus: sha256(merchant + secret_key + trx_id) – lowercase
    // -------------------------------------------------------
    protected function makeSignature(string $trxId): string
    {
        return hash('sha256', $this->merchantId . $this->secretKey . $trxId);
    }

    // Signature tanpa trx_id (untuk request payment_methods, profile, dll.)
    protected function makeSignatureSimple(): string
    {
        return hash('sha256', $this->merchantId . $this->secretKey);
    }

    protected function httpHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept'       => 'application/json',
            'User-Agent'   => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
        ];
    }

    // -------------------------------------------------------
    // 1. Create Transaction (request=new)
    // -------------------------------------------------------
    public function createTransaction(Order $order, array $params = []): array
    {
        // Jika API Key belum dikonfigurasi → gunakan mode simulasi
        if (empty($this->merchantId) || empty($this->secretKey)) {
            return [
                'success'           => true,
                'payment_gateway'   => 'zannpay',
                'payment_reference' => 'ZANNPAY-' . $order->kode_transaksi,
                'payment_url'       => route('payment.page', $order->id),
                'payment_token'     => 'MOCK-ZANNPAY-' . $order->id,
                'status'            => 'pending',
                'message'           => 'API Key Zannpay belum dikonfigurasi di .env. Menggunakan mode simulasi.',
            ];
        }

        $trxId  = $order->kode_transaksi;
        $amount = (int) round($order->total_harga);
        $method = strtoupper($params['payment_method'] ?? 'QRIS');

        $payload = [
            'request'      => 'new',
            'merchant'     => $this->merchantId,
            'trx_id'       => $trxId,
            'amount'       => $amount,
            'nominal'      => $amount,
            'payment'      => $method,
            'method'       => $method,
            'callback_url' => route('payment.webhook', 'zannpay'),
            'return_url'   => route('payment.page', $order->id),
            'signature'    => $this->makeSignature($trxId),
        ];

        // Opsional: nama pelanggan & email
        if ($order->user) {
            $payload['customer_name']  = $order->user->name ?? 'Pembeli';
            $payload['customer_email'] = $order->user->email ?? '';
            $payload['customer_phone'] = $order->user->phone ?? '';
        }

        try {
            $response = Http::withHeaders($this->httpHeaders())
                ->timeout(20)
                ->post($this->baseUrl, $payload);

            $result = $response->json();

            Log::info('Zannpay createTransaction response', [
                'status_code' => $response->status(),
                'res'         => $result,
            ]);

            if ($response->successful() && !empty($result['status']) && $result['status'] === true) {
                $data = $result['data'] ?? [];
                return [
                    'success'           => true,
                    'payment_gateway'   => 'zannpay',
                    'payment_reference' => $data['trx_svr'] ?? $data['reference'] ?? $trxId,
                    'payment_url'       => $data['checkout_url'] ?? $data['pay_url'] ?? route('payment.page', $order->id),
                    'payment_token'     => $data['trx_svr'] ?? $data['reference'] ?? '',
                    'status'            => 'pending',
                    'message'           => $result['message'] ?? $result['msg'] ?? 'Transaksi Zannpay berhasil dibuat.',
                ];
            }

            // Ekstrak pesan error dari Zannpay
            $errorMessage = $result['message'] ?? $result['msg'] ?? null;
            if (!$errorMessage && !empty($result['errors']) && is_array($result['errors'])) {
                $errorMessage = implode(', ', array_map(fn($e) => is_array($e) ? implode(' ', $e) : $e, $result['errors']));
            }
            if (!$errorMessage && $response->status() === 429) {
                $errorMessage = 'Terlalu banyak permintaan ke Zannpay. Silakan tunggu beberapa saat lagi.';
            }

            Log::error('Zannpay API Error', [
                'status_code' => $response->status(),
                'response'    => $result,
                'raw'         => substr($response->body(), 0, 500),
            ]);

            return [
                'success'           => false,
                'payment_gateway'   => 'zannpay',
                'payment_reference' => '',
                'payment_url'       => '',
                'payment_token'     => '',
                'status'            => 'failed',
                'message'           => $errorMessage ?: 'Gagal membuat transaksi Zannpay (Kode ' . $response->status() . ').',
            ];

        } catch (\Exception $e) {
            Log::error('Zannpay Exception: ' . $e->getMessage());

            return [
                'success'           => false,
                'payment_gateway'   => 'zannpay',
                'payment_reference' => '',
                'payment_url'       => '',
                'payment_token'     => '',
                'status'            => 'failed',
                'message'           => 'Koneksi ke Zannpay gagal: ' . $e->getMessage(),
            ];
        }
    }

    // -------------------------------------------------------
    // 2. Handle Webhook / Callback Notification
    // -------------------------------------------------------
    public function handleWebhook(Request $request): array
    {
        $payload   = $request->all();
        $trxId     = $payload['trx_id'] ?? ($payload['merchant_ref'] ?? null);
        $statusRaw = strtoupper($payload['status'] ?? '');

        // Map status Zannpay → status internal
        $status = match ($statusRaw) {
            'PAID', 'SUCCESS', 'SETTLEMENT' => 'paid',
            'EXPIRED', 'FAILED', 'CANCEL'  => 'failed',
            default                         => 'pending',
        };

        return [
            'success'        => true,
            'kode_transaksi' => $trxId,
            'status'         => $status,
            'raw'            => $payload,
            'message'        => 'Webhook Zannpay berhasil diproses.',
        ];
    }

    // -------------------------------------------------------
    // 3. Check Status (request=status)
    // -------------------------------------------------------
    public function checkStatus(Order $order): array
    {
        if (empty($this->merchantId) || empty($this->secretKey) || empty($order->payment_reference)) {
            return ['status' => $order->status_pembayaran, 'raw' => []];
        }

        $trxId = $order->kode_transaksi;

        $payload = [
            'request'   => 'status',
            'merchant'  => $this->merchantId,
            'trx_id'    => $trxId,
            'signature' => $this->makeSignature($trxId),
        ];

        try {
            $response = Http::withHeaders($this->httpHeaders())
                ->timeout(15)
                ->post($this->baseUrl, $payload);

            $result = $response->json();
            $data   = $result['data'] ?? [];

            $statusRaw = strtoupper($data['status'] ?? '');
            $status = match ($statusRaw) {
                'PAID', 'SUCCESS', 'SETTLEMENT' => 'paid',
                'EXPIRED', 'FAILED', 'CANCEL'  => 'failed',
                default                         => 'pending',
            };

            return ['status' => $status, 'raw' => $result];

        } catch (\Exception $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    // -------------------------------------------------------
    // 4. Ambil Daftar Metode Pembayaran (request=payment_methods)
    // -------------------------------------------------------
    public function getPaymentMethods(): array
    {
        if (empty($this->merchantId) || empty($this->secretKey)) {
            return [];
        }

        $payload = [
            'request'   => 'payment_methods',
            'merchant'  => $this->merchantId,
            'signature' => $this->makeSignatureSimple(),
            'panduan'   => false,
        ];

        try {
            $response = Http::withHeaders($this->httpHeaders())
                ->timeout(15)
                ->post($this->baseUrl, $payload);

            $result = $response->json();

            if (!empty($result['status']) && $result['status'] === true) {
                return $result['data'] ?? [];
            }

            return [];
        } catch (\Exception $e) {
            Log::error('Zannpay getPaymentMethods failed: ' . $e->getMessage());
            return [];
        }
    }
}
