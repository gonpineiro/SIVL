<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
      protected $guarded = [];

      public function especies(){

        return $this->hasMany('App\Especie');
      }
}
