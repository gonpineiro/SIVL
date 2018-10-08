<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prototype extends Model
{
    protected $guarded = [];

    public function especie(){

      return $this->belongsTo(Especie::class);
    }

    public function ambiente(){

      return $this->hasOne('App\Ambiente');
    }

    public function sensor(){

      return $this->belongsTo('App\Sensor');
    }


}
