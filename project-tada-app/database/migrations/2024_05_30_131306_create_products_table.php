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
        // Table Product //
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->enum('category', ['Buah', 'Sayur Hijau', 'Rempah', 'Ubi', 'Jamur', 'Biji-bijian']);
            $table->longText('product_name');
            $table->longText('stock');
            $table->longText('unit');
            $table->longText('price');
            $table->longText('image');
            $table->longText('desc');
            $table->timestamps();

            // $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
