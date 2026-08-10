<?php

namespace Database\Seeders;

use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat User Penjual (Seller)
        $seller = User::create([
            'name' => 'Artisan Nusantara',
            'email' => 'seller@katalog.id',
            'password' => Hash::make('password123'),
            'role' => 'seller',
            'phone' => '081234567890',
            'address' => 'Jl. Pengrajin No. 45, Bandung',
        ]);

        // 2. Buat Toko milik Seller tersebut
        Store::create([
            'user_id' => $seller->id,
            'nama_toko' => 'Artisan Nusantara Store',
            'slug' => Str::slug('Artisan Nusantara Store'),
            'deskripsi' => 'Penyedia kerajinan tanah liat, kayu, dan perlengkapan rumah tangga kualitas terbaik buatan pengrajin lokal Indonesia.',
            'kota' => 'Kota Denpasar',
            'is_active' => true,
        ]);
    }
}
