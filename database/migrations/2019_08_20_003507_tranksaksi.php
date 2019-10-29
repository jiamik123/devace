<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tranksaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Tranksaksi', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->Integer('id_barang');
          $table->string('nama_barang');
          $table->integer('jumlah_barang');
          $table->integer('harga_satuan');
          $table->integer('total_harga');
          $table->timestamps();

        // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tranksaksi');
    }
}
