<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $guarded = [];

    public function prototypes(){

      return $this->hasOne('App\Prototype');
    }

    public function dispositivos(){

      return $this->belongsTo('App\Dispositivo');
    }
}
