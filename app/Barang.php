<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    public function suppliyer(){
      return $this->belongsTo('App\Suppliyer');
    }

    public function tranksaksi(){
      return $this->belongsTo('App\Tranksaksi');
    }
}
