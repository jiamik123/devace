<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tranksaksi extends Model
{
    protected $table='tranksaksi';
    public function Barang(){
      return $this->hasMany('App\Barang');
    }
    public function Tranksaksis()
    {
        return $this->hasMany('App\Tranksaksis');
    }
}
