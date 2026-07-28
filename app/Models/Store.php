<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $guarded = ['id'];

    // 1 Toko milik 1 User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 1 Toko memiliki BANYAK Produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
