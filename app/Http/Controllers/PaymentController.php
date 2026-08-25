<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\Payment\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $order = Order::with(['items.product', 'store', 'user'])->findOrFail($orderId);

        // Keamanan: pastikan pembeli yang login yang melihat pesanan ini (atau seller/admin)
        if (Auth::check() && Auth::user()->role === 'customer' && $order->user_id !== Auth::id()) {
            abort(403, 'Anda tidak memiliki akses ke halaman pembayaran ini.');
        }

        $bankAccounts = config('payment.drivers.manual.bank_accounts', []);
        $activeGateway = $order->payment_gateway ?: config('payment.default', 'manual');
        $midtransClientKey = config('payment.drivers.midtrans.client_key', '');
        $isMidtransProduction = config('payment.drivers.midtrans.is_production', false);

        return view('product.payment', compact(
            'order', 
            'bankAccounts', 
            'activeGateway', 
            'midtransClientKey',
            'isMidtransProduction'
        ));
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
            'status' => $order->status_pembayaran,
            'paid_at' => $order->paid_at ? $order->paid_at->format('d M Y H:i:s') : null,
        ]);
    }

    /**
     * Handle Webhook / Callback Notification dari Payment Gateway (Midtrans, Xendit, Tripay)
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
