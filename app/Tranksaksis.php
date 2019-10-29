<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tranksaksis extends Model
{
    protected $table='tranksaksis';
    public function Tranksaksi()
    {
        return $this->belongsTo('App\Tranksaksi');
    }
  }
