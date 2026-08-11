<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductGallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Gambar ini TUNDUK/DIMILIKI oleh 1 Produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Accessor untuk foto_url yang aman & lengkap
     */
    public function getFotoUrlAttribute()
    {
        if (empty($this->foto_path)) {
            return 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=600&q=80';
        }
        $path = trim($this->foto_path);
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }
        if (str_starts_with($path, 'storage/')) {
            return asset($path);
        }
        return asset('storage/' . ltrim($path, '/'));
    }
}
