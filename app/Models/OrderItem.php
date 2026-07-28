<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Item ini bagian dari 1 Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Item ini merujuk pada 1 Produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
