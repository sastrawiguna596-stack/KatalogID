<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'store_id',
        'kode_transaksi',
        'total_harga',
        'status_pembayaran',
        'status_pengiriman',
        'alamat_pengiriman',
        'destination_area_id',
        'nomor_resi',
        'biteship_order_id',
        'biteship_tracking_id',
        'biteship_status',
        'courier_company',
        'courier_type',
        'shipping_cost',
        'payment_method',
        'payment_gateway',
        'payment_reference',
        'payment_url',
        'payment_token',
        'paid_at',
    ];

    // Relasi: Order milik 1 User (Pembeli)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi: Order ditujukan ke 1 Toko
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    // Relasi: 1 Order memiliki banyak OrderItem
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
