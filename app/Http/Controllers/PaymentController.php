<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\Payment\PaymentService;
use App\Services\Payment\ZannpayDriver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    /**
     * Tampilkan Halaman Instruksi Pembayaran & Gateway
     */
    public function showPaymentPage($orderId)
    {
        $order = Order::with(['items.product.galleries', 'store', 'user'])->findOrFail($orderId);

        // Keamanan: pastikan pembeli yang login yang melihat pesanan ini (atau seller/admin)
        if (Auth::check() && Auth::user()->role === 'customer' && $order->user_id !== Auth::id()) {
            abort(403, 'Anda tidak memiliki akses ke halaman pembayaran ini.');
        }

        $bankAccounts        = config('payment.drivers.manual.bank_accounts', []);
        $activeGateway       = $order->payment_gateway ?: config('payment.default', 'manual');
        $midtransClientKey   = config('payment.drivers.midtrans.client_key', '');
        $isMidtransProduction = config('payment.drivers.midtrans.is_production', false);

        // Zannpay: ambil metode pembayaran & simpan sementara di cache (rate-limit 1 req/2 menit)
        $zannpayMethods      = [];
        $isZannpayConfigured = !empty(config('payment.drivers.zannpay.merchant_id'))
                            && !empty(config('payment.drivers.zannpay.secret_key'));

        if ($isZannpayConfigured && $activeGateway === 'zannpay') {
            $cacheKey       = 'zannpay_payment_methods_' . config('payment.drivers.zannpay.merchant_id');
            $zannpayMethods = Cache::remember($cacheKey, 120, function () {
                $driver = new ZannpayDriver();
                return $driver->getPaymentMethods();
            });
        }

        return view('product.payment', compact(
            'order',
            'bankAccounts',
            'activeGateway',
            'midtransClientKey',
            'isMidtransProduction',
            'zannpayMethods',
            'isZannpayConfigured'
        ));
    }

    /**
     * Inisiasi Pembayaran Zannpay – Pilih Metode & Buat Transaksi
     */
    public function initiateZannpay(Request $request, $orderId)
    {
        $order  = Order::with('user')->findOrFail($orderId);

        if (Auth::check() && Auth::user()->role === 'customer' && $order->user_id !== Auth::id()) {
            abort(403);
        }

        $method = $request->input('payment_method', 'QRIS');

        $result = $this->paymentService->createPayment($order, $method, 'zannpay');

        if ($result['success'] && !empty($result['payment_url']) && !str_contains($result['payment_url'], route('payment.page', $orderId))) {
            // Ada payment_url dari Zannpay → redirect ke halaman checkout Zannpay
            return redirect()->away($result['payment_url']);
        }

        // Jika URL kembali ke halaman kita sendiri (simulasi/error) → tetap di sini
        return redirect()->route('payment.page', $orderId)
            ->with($result['success'] ? 'success' : 'error',
                   $result['message'] ?? ($result['success'] ? 'Transaksi dibuat.' : 'Gagal membuat transaksi.'));
    }

    /**
     * Konfirmasi Pembayaran Manual / Dev Sandbox (Instant Success)
     */
    public function confirmManualPayment($orderId)
    {
        $order = Order::findOrFail($orderId);

        $this->paymentService->confirmManualPayment($order);

        return redirect()->route('cust_recent_orders')
            ->with('success', 'Pembayaran pesanan #' . $order->kode_transaksi . ' berhasil dikonfirmasi!');
    }

    /**
     * Cek Status Pembayaran via AJAX
     */
    public function checkPaymentStatus($orderId)
    {
        $order = Order::findOrFail($orderId);

        return response()->json([
            'status'  => $order->status_pembayaran,
            'paid_at' => $order->paid_at ? $order->paid_at->format('d M Y H:i:s') : null,
        ]);
    }

    /**
     * Handle Webhook / Callback Notification dari Payment Gateway (Midtrans, Xendit, Tripay, Zannpay)
     */
    public function handleWebhook(Request $request, $gateway = null)
    {
        $success = $this->paymentService->handleWebhook($request, $gateway);

        if ($success) {
            return response()->json(['status' => 'success', 'message' => 'Notification processed successfully']);
        }

        return response()->json(['status' => 'error', 'message' => 'Invalid transaction notification'], 400);
    }
}
