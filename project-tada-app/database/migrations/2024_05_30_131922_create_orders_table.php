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
        // Table Order //
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_farmer');
            $table->unsignedBigInteger('id_merchant');
            $table->enum('status', ['Menunggu', 'Dikemas', 'Dikirim', 'Ditolak', 'Sukses']);
            $table->longText('dropping_address');
            $table->dateTime('order_date');
            $table->dateTime('packing_date'); // active setelah diterima
            $table->dateTime('shipping_date');
            $table->dateTime('reject_date');
            $table->dateTime('done_date');
            $table->timestamps();

            // $table->foreign('id_farmer')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('id_merchant')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
