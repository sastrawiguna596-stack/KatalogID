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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('payment_method')->nullable()->after('status_pembayaran');
            $table->string('payment_gateway')->nullable()->after('payment_method');
            $table->string('payment_reference')->nullable()->after('payment_gateway');
            $table->text('payment_url')->nullable()->after('payment_reference');
            $table->text('payment_token')->nullable()->after('payment_url');
            $table->timestamp('paid_at')->nullable()->after('payment_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'payment_method',
                'payment_gateway',
                'payment_reference',
                'payment_url',
                'payment_token',
                'paid_at',
            ]);
        });
    }
};
