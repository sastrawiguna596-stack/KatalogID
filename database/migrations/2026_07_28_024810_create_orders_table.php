<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('store_id')->constrained()->onDelete('cascade');
            $table->string('kode_transaksi')->unique();
            $table->decimal('total_harga', 12, 2);
            $table->enum('status_pembayaran', ['pending', 'paid', 'failed', 'cancelled'])->default('pending');
            $table->enum('status_pengiriman', ['pending', 'processing', 'shipped', 'delivered', 'cancelled'])->default('pending');
            $table->text('alamat_pengiriman');
            $table->string('nomor_resi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
