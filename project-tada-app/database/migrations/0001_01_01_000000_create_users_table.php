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
        // Table Roles //
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->timestamps();
        });

        // Table Users //
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->longText('phone_number')->unique();
            $table->longText('address');
            $table->longText('password');
            $table->unsignedBigInteger('id_role');
            $table->rememberToken()->nullable();
            $table->timestamps();

            $table->foreign('id_role')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
        });

        // Table Product //
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->longText('product_name');
            $table->unsignedBigInteger('id_user');
            $table->longText('stock');
            $table->longText('unit');
            $table->longText('price');
            $table->longText('image');
            $table->longText('desc');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        // Table Order //
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_farmer');
            $table->unsignedBigInteger('id_merchant');
            $table->enum('status', ['Menunggu', 'Dikemas', 'Dikirim', 'Ditolak', 'Sukses']);
            $table->longText('dropping_address');
            $table->dateTime('order_date');
            $table->dateTime('packing_date');
            $table->dateTime('shipping_date');
            $table->dateTime('reject_date');
            $table->dateTime('done_date');
            $table->timestamps();

            $table->foreign('id_farmer')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_merchant')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

        // Table Detail Order //
        Schema::create('detail_order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_order');
            $table->unsignedBigInteger('id_product');
            $table->longText('sub_total');
            $table->longText('product_quantity');
            $table->timestamps();

            $table->foreign('id_order')->references('id')->on('order')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_product')->references('id')->on('product')->onUpdate('cascade')->onDelete('cascade');
        });

        // Table Sessions // -- Ditambahkan karena tidak bisa masuk ke tampilan awal
        Schema::create('sessions', function (Blueprint $table) {
            // $table->longText('id')->primary();
            $table->id();
            $table->foreignId('user_id')->nullable()->index();
            $table->longText('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('users');
        Schema::dropIfExists('product');
        Schema::dropIfExists('order');
        Schema::dropIfExists('detail_order');
    }
};
