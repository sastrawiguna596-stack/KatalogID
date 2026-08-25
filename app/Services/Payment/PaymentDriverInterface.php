<?php

namespace App\Services\Payment;

use App\Models\Order;
use Illuminate\Http\Request;

interface PaymentDriverInterface
{
    /**
     * Buat Transaksi Pembayaran / Snap Token / Invoice Link
     *
     * @param Order $order
     * @param array $params
     * @return array ['success' => bool, 'payment_url' => string, 'payment_token' => string, 'payment_reference' => string, 'status' => string, 'message' => string]
     */
    public function createTransaction(Order $order, array $params = []): array;

    /**
     * Tangani Callback / Notification Webhook dari Payment Gateway
     *
     * @param Request $request
     * @return array ['success' => bool, 'order_id' => int|string, 'status' => string, 'message' => string]
     */
    public function handleWebhook(Request $request): array;

    /**
     * Cek Status Pembayaran Langsung ke API Payment Gateway
     *
     * @param Order $order
     * @return array ['status' => string, 'raw' => mixed]
     */
    public function checkStatus(Order $order): array;
}
