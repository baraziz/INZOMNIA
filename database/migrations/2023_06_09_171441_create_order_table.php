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
        Schema::create('order', function (Blueprint $table) {
            $table->uuid();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('barang_id');
            $table->string('ukuran');
            $table->unsignedInteger('jumlah');
            $table->unsignedInteger('totalHarga');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('barang_id')->references('id')->on('barangs');
            $table->primary(['uuid', 'user_id', 'barang_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
