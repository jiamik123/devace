<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Barang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('barang', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nama_barang');
          $table->integer('jumlah_barang');
          $table->integer('harga_barang');
          $table->bigInteger('suppliyer_id')->unsigned();
          $table->timestamps();

          $table->foreign('suppliyer_id')->references('id')->on('suppliyers')->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
