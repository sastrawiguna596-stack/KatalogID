<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Ulasan ditulis oleh 1 User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Ulasan ditujukan untuk 1 Produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
