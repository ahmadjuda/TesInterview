<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->string('kode', 10)->nullable();
            $table->string('nama_produk', 50)->nullable();
            $table->string('harga', 10)->nullable();
            $table->string('panjang', 5)->nullable();
            $table->string('lebar', 5)->nullable();
            $table->string('tinggi', 5)->nullable();
            $table->integer('id_jenis_produk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
