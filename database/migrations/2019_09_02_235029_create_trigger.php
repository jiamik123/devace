<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER transaction AFTER INSERT ON `tranksaksi` FOR EACH ROW
          BEGIN
            UPDATE barang SET jumlah_barang = jumlah_barang - NEW.jumlah_barang where barang.id = NEW.id_barang;
          END
          ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `transaction`');
    }
}
