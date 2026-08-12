<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class BiteshipService
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl = 'https://api.biteship.com';
        $this->apiKey = env('BITESHIP_API_KEY');
    }

    /**
     * Helper untuk HTTP GET request ke Biteship
     */
    protected function get($endpoint, $params = [])
    {
        return Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->get($this->baseUrl . $endpoint, $params)->json();
    }

    /**
     * Helper untuk HTTP POST request ke Biteship
     */
    protected function post($endpoint, $data = [])
    {
        return Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->post($this->baseUrl . $endpoint, $data)->json();
    }

    /**
     * Cari Area berdasarkan query text
     */
    public function searchArea($query)
    {
        $response = $this->get('/v1/maps/areas', [
            'countries' => 'ID',
            'input' => $query,
            'type' => 'single',
        ]);

        return $response['areas'] ?? [];
    }

    /**
     * Dapatkan Ongkos Kirim (Rates)
     */
    public function getRates($originAreaId, $destinationAreaId, $items, $couriers = 'jne,sicepat,jnt,anteraja')
    {
        $payload = [
            'origin_area_id' => $originAreaId,
            'destination_area_id' => $destinationAreaId,
            'couriers' => $couriers,
            'items' => $items,
        ];

        $response = $this->post('/v1/rates/couriers', $payload);

        if (isset($response['error'])) {
            return ['error' => $response['error']];
        }

        return $response['pricing'] ?? $response;
    }

    /**
     * Buat Pesanan (Pickup Request)
     */
    public function createOrder($orderData)
    {
        return $this->post('/v1/orders', $orderData);
    }

    /**
     * Lacak Pesanan berdasarkan Biteship Tracking ID / Resi
     */
    public function trackOrder($trackingId)
    {
        return $this->get('/v1/trackings/' . $trackingId);
    }
}
