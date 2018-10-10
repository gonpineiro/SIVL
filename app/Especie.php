<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $guarded = [];

    public function marca(){

      return $this->belongsTo('App\Marca');
    }

    public function prototypes(){
      return $this->belongsToMany('App\Prototype');
    }

    public function type(){
      return $this->hasOne('App\Type');
    }
    public function variedad(){
      return $this->belongsTo('App\Variedad');
    }
}
