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
}
