<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranksaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tranksaksis', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('id_barang_cart');
          $table->string('nama_barang');
          $table->integer('jumlah_barang');
          $table->integer('harga_satuan');
          $table->integer('total_harga');
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
        Schema::dropIfExists('tranksaksis');
    }
}
