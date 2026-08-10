<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['nama_kategori' => 'Kebutuhan Harian', 'icon_path' => 'ph:sparkle-bold'],
            ['nama_kategori' => 'Peralatan Dapur', 'icon_path' => 'ph:cooking-pot-bold'],
            ['nama_kategori' => 'Lampu & Pencahayaan', 'icon_path' => 'ph:lamp-bold'],
            ['nama_kategori' => 'Mebel & Furnitur', 'icon_path' => 'ph:armchair-bold'],
            ['nama_kategori' => 'Dekorasi Rumah', 'icon_path' => 'ph:house-line-bold'],
            ['nama_kategori' => 'Pakaian & Aksesoris', 'icon_path' => 'ph:t-shirt-bold'],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(
                ['slug' => Str::slug($cat['nama_kategori'])],
                [
                    'nama_kategori' => $cat['nama_kategori'],
                    'icon_path' => $cat['icon_path']
                ]
            );
        }
    }
}
