<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Mengizinkan semua kolom diisi secara massal, kecuali ID
    protected $guarded = ['id'];

    // Relasi: Produk dimiliki oleh 1 Toko
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    // Relasi: Produk termasuk dalam 1 Kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi: 1 Produk memiliki BANYAK Gambar
    public function galleries()
    {
        return $this->hasMany(ProductGallery::class);
    }

    // Relasi: 1 Produk memiliki BANYAK Varian (Warna/Ukuran)
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    // Relasi: 1 Produk memiliki BANYAK Ulasan
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Relasi: 1 Produk memiliki BANYAK Order Item
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
