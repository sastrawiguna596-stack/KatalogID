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
            $table->string('biteship_order_id')->nullable()->after('nomor_resi');
            $table->string('biteship_tracking_id')->nullable()->after('biteship_order_id');
            $table->string('biteship_status')->nullable()->after('biteship_tracking_id');
            $table->string('courier_company')->nullable()->after('biteship_status');
            $table->string('courier_type')->nullable()->after('courier_company');
            $table->decimal('shipping_cost', 12, 2)->default(0)->after('courier_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'biteship_order_id',
                'biteship_tracking_id',
                'biteship_status',
                'courier_company',
                'courier_type',
                'shipping_cost'
            ]);
        });
    }
};
