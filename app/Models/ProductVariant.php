<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVariant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Varian ini milik 1 Produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
