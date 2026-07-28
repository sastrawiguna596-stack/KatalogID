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
            ['nama_kategori' => 'Essentials', 'icon_path' => 'ph:sparkle-bold'],
            ['nama_kategori' => 'Kitchenware', 'icon_path' => 'ph:cooking-pot-bold'],
            ['nama_kategori' => 'Lighting', 'icon_path' => 'ph:lamp-bold'],
            ['nama_kategori' => 'Furniture', 'icon_path' => 'ph:armchair-bold'],
            ['nama_kategori' => 'Home Decor', 'icon_path' => 'ph:house-line-bold'],
            ['nama_kategori' => 'Fashion', 'icon_path' => 'ph:t-shirt-bold'],
        ];

        foreach ($categories as $cat) {
            Category::create([
                'nama_kategori' => $cat['nama_kategori'],
                'slug' => Str::slug($cat['nama_kategori']),
                'icon_path' => $cat['icon_path']
            ]);
        }
    }
}
