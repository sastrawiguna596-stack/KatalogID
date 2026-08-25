<?php

namespace App\Services\Payment;

use App\Models\Order;
use Illuminate\Http\Request;

class ManualDriver implements PaymentDriverInterface
{
    public function createTransaction(Order $order, array $params = []): array
    {
        $ref = 'PAY-MANUAL-' . $order->kode_transaksi;
        
        return [
            'success' => true,
            'payment_gateway' => 'manual',
            'payment_reference' => $ref,
            'payment_url' => route('payment.page', $order->id),
            'payment_token' => $ref,
            'status' => 'pending',
            'message' => 'Instruksi pembayaran manual berhasil dibuat.',
        ];
    }

    public function handleWebhook(Request $request): array
    {
        $orderId = $request->input('order_id');
        $status = $request->input('status', 'paid');

        return [
            'success' => true,
            'order_id' => $orderId,
            'status' => $status,
            'message' => 'Konfirmasi pembayaran manual berhasil.',
        ];
    }

    public function checkStatus(Order $order): array
    {
        return [
            'status' => $order->status_pembayaran,
            'raw' => [
                'mode' => 'manual',
                'order_id' => $order->id,
                'status' => $order->status_pembayaran,
            ],
        ];
    }
}
