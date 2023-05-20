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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori', 10);
            $table->bigInteger('harga', false, true);
            $table->integer('ukuran_s', false, true)->nullable();
            $table->integer('ukuran_m', false, true)->nullable();
            $table->integer('ukuran_l', false, true)->nullable();
            $table->integer('ukuran_xl', false, true)->nullable();
            $table->longText('deskripsi');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
