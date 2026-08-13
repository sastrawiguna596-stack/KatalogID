<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ubah default is_active pada tabel stores menjadi false (0).
     * Toko yang baru daftar harus diverifikasi oleh Master Admin terlebih dahulu.
     */
    public function up(): void
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->boolean('is_active')->default(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->boolean('is_active')->default(true)->change();
        });
    }
};
