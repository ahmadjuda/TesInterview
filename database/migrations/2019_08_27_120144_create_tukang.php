<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTukang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tukang', function (Blueprint $table) {
            $table->bigIncrements('id_tukang');
            $table->string('nama_tukang', 50)->nullable();
            $table->string('foto')->nullable();
            $table->string('cv_portofolio')->nullable();
            $table->integer('harga_harian')->nullable();
            $table->integer('harga_borongan')->nullable();
            $table->integer('id_jenis_tukang')->nullable();
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
        Schema::dropIfExists('tukang');
    }
}
