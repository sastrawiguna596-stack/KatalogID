<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Payment Gateway Driver
    |--------------------------------------------------------------------------
    |
    | Driver aktif yang digunakan untuk memproses pembayaran checkout.
    | Pilihan: 'manual', 'midtrans', 'xendit', 'tripay'
    |
    */
    'default' => env('PAYMENT_GATEWAY', 'manual'),

    /*
    |--------------------------------------------------------------------------
    | Payment Gateway Drivers Configuration
    |--------------------------------------------------------------------------
    |
    | Tempat Anda menyimpan API Keys, Server Keys, Secret Tokens untuk berbagai
    | payment gateway. Cukup masukkan API Key Anda di file .env nanti.
    |
    */
    'drivers' => [
        'manual' => [
            'name' => 'Transfer Bank Manual / Sandbox',
            'bank_accounts' => [
                [
                    'bank' => 'BCA',
                    'number' => '8290123456',
                    'holder' => 'PT Katalog Indonesia Digital',
                ],
                [
                    'bank' => 'Mandiri',
                    'number' => '1420019876543',
                    'holder' => 'PT Katalog Indonesia Digital',
                ],
                [
                    'bank' => 'BRI',
                    'number' => '034101001234509',
                    'holder' => 'PT Katalog Indonesia Digital',
                ],
            ],
        ],

        'midtrans' => [
            'merchant_id' => env('MIDTRANS_MERCHANT_ID', ''),
            'client_key' => env('MIDTRANS_CLIENT_KEY', ''),
            'server_key' => env('MIDTRANS_SERVER_KEY', ''),
            'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
            'is_sanitized' => env('MIDTRANS_IS_SANITIZED', true),
            'is_3ds' => env('MIDTRANS_IS_3DS', true),
        ],

        'xendit' => [
            'secret_key' => env('XENDIT_SECRET_KEY', ''),
            'public_key' => env('XENDIT_PUBLIC_KEY', ''),
            'webhook_token' => env('XENDIT_WEBHOOK_TOKEN', ''),
        ],

        'tripay' => [
            'merchant_code' => env('TRIPAY_MERCHANT_CODE', ''),
            'api_key' => env('TRIPAY_API_KEY', ''),
            'private_key' => env('TRIPAY_PRIVATE_KEY', ''),
            'is_production' => env('TRIPAY_IS_PRODUCTION', false),
        ],
    ],
];
