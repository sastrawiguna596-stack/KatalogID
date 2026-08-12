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
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('store_id')->nullable()->constrained('stores')->onDelete('cascade');
            $table->string('subjek');
            $table->string('kategori')->default('lainnya');
            $table->text('pesan');
            $table->text('balasan_admin')->nullable();
            $table->string('status')->default('pending'); // pending, replied, closed
            $table->timestamp('replied_at')->nullable();
            $table->timestamps();
        });

        Schema::create('user_notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('support_ticket_id')->nullable()->constrained('support_tickets')->onDelete('cascade');
            $table->string('judul');
            $table->text('pesan');
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_notifications');
        Schema::dropIfExists('support_tickets');
    }
};
