<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasPendukung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_pendukung', function (Blueprint $table) {
            $table->bigIncrements('id_fasilitas_pendukung');
            $table->string('fasilitas_pendukung', 50)->nullable();
            $table->integer('panjang')->nullable();
            $table->integer('lebar')->nullable();
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
        Schema::dropIfExists('fasilitas_pendukung');
    }
}
