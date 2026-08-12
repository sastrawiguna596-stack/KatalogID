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

    /**
     * Accessor untuk total produk terjual berdasarkan order berstatus lunas / paid / berhasil
     */
    public function getTotalSoldAttribute()
    {
        return (int) $this->orderItems()
            ->whereHas('order', function ($query) {
                $query->whereIn('status_pembayaran', ['paid', 'lunas', 'berhasil', 'success', 'settlement']);
            })
            ->sum('jumlah');
    }

    /**
     * Accessor untuk gambar utama produk yang selalu valid & aman
     */
    public function getFirstImageUrlAttribute()
    {
        $gallery = $this->galleries ? $this->galleries->first() : null;
        if ($gallery && !empty($gallery->foto_url)) {
            return $gallery->foto_url;
        }

        // Fallback gambar estetis beresolusi tinggi jika belum ada galeri foto
        $categorySlug = $this->category->slug ?? '';
        $fallbacks = [
            'kebutuhan-harian' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=600&q=80',
            'peralatan-dapur'  => 'https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=600&q=80',
            'lampu-pencahayaan'=> 'https://images.unsplash.com/photo-1507473885765-e6ed057f782c?auto=format&fit=crop&w=600&q=80',
            'mebel-furnitur'   => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=600&q=80',
            'dekorasi-rumah'   => 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=600&q=80',
            'pakaian-aksesoris'=> 'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&fit=crop&w=600&q=80',
        ];

        return $fallbacks[$categorySlug] ?? 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=600&q=80';
    }
}
