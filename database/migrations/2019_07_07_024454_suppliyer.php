<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Suppliyer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('suppliyers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nama_suppliyer');
          $table->string('alamat_suppliyer');
          $table->string('no_telp');
          // $table->integer('harga_barang');
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
        //
    }
}
