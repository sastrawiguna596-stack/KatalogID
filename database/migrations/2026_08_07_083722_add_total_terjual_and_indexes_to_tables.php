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
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'total_terjual')) {
                $table->integer('total_terjual')->default(0)->after('stok');
            }
        });

        foreach ([
            ['products', 'status'],
            ['products', 'store_id'],
            ['products', 'category_id'],
            ['products', 'total_terjual'],
            ['orders', 'status_pembayaran'],
            ['orders', 'status_pengiriman'],
            ['orders', 'user_id'],
            ['orders', 'store_id'],
            ['order_items', 'product_id'],
        ] as [$tbl, $col]) {
            try {
                Schema::table($tbl, function (Blueprint $table) use ($col) {
                    $table->index($col);
                });
            } catch (\Throwable $e) {
                // Ignore if index already exists
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['store_id']);
            $table->dropIndex(['category_id']);
            $table->dropIndex(['total_terjual']);
            if (Schema::hasColumn('products', 'total_terjual')) {
                $table->dropColumn('total_terjual');
            }
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropIndex(['status_pembayaran']);
            $table->dropIndex(['status_pengiriman']);
            $table->dropIndex(['user_id']);
            $table->dropIndex(['store_id']);
        });

        Schema::table('order_items', function (Blueprint $table) {
            $table->dropIndex(['product_id']);
        });
    }
};
