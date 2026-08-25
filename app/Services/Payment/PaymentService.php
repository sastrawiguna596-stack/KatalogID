<?php

namespace App\Services\Payment;

use App\Models\Order;
use Illuminate\Http\Request;
use InvalidArgumentException;

class PaymentService
{
    /**
     * Dapatkan instance driver Payment Gateway berdasarkan nama gateway atau default config
     *
     * @param string|null $gateway
     * @return PaymentDriverInterface
     */
    public function driver(?string $gateway = null): PaymentDriverInterface
    {
        $gatewayName = strtolower($gateway ?: config('payment.default', 'manual'));

        switch ($gatewayName) {
            case 'midtrans':
                return new MidtransDriver();
            case 'xendit':
                return new XenditDriver();
            case 'tripay':
                return new TripayDriver();
            case 'manual':
            default:
                return new ManualDriver();
        }
    }

    /**
     * Proses pembuatan transaksi pembayaran untuk Order
     *
     * @param Order $order
     * @param string|null $paymentMethod
     * @param string|null $gateway
     * @return array
     */
    public function createPayment(Order $order, ?string $paymentMethod = null, ?string $gateway = null): array
    {
        $driver = $this->driver($gateway);
        $result = $driver->createTransaction($order, [
            'payment_method' => $paymentMethod ?: 'bank_transfer',
        ]);

        if ($result['success']) {
            $order->update([
                'payment_method' => $paymentMethod ?: 'bank_transfer',
                'payment_gateway' => $result['payment_gateway'] ?? ($gateway ?: config('payment.default', 'manual')),
                'payment_reference' => $result['payment_reference'] ?? null,
                'payment_url' => $result['payment_url'] ?? null,
                'payment_token' => $result['payment_token'] ?? null,
                'status_pembayaran' => $result['status'] ?? 'pending',
            ]);
        }

        return $result;
    }

    /**
     * Tangani callback webhook dari gateway mana saja
     *
     * @param Request $request
     * @param string|null $gateway
     * @return bool
     */
    public function handleWebhook(Request $request, ?string $gateway = null): bool
    {
        $driver = $this->driver($gateway);
        $res = $driver->handleWebhook($request);

        if (!empty($res['kode_transaksi']) || !empty($res['order_id'])) {
            $identifier = $res['kode_transaksi'] ?? $res['order_id'];
            
            $order = Order::where('kode_transaksi', $identifier)
                ->orWhere('id', $identifier)
                ->first();

            if ($order) {
                $newStatus = $res['status'] ?? 'pending';
                $updateData = ['status_pembayaran' => $newStatus];
                
                if ($newStatus === 'paid' && !$order->paid_at) {
                    $updateData['paid_at'] = now();
                }

                $order->update($updateData);
                return true;
            }
        }

        return false;
    }

    /**
     * Simulasikan / Konfirmasi Pembayaran Manual untuk testing / mode dev
     *
     * @param Order $order
     * @return bool
     */
    public function confirmManualPayment(Order $order): bool
    {
        return $order->update([
            'status_pembayaran' => 'paid',
            'paid_at' => now(),
        ]);
    }
}
