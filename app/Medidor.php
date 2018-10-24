<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidor extends Model
{

    protected $fillable = [
        'identity', 'temperatura', 'humedad', 'estado_luces', 'estado_tiempo',
    ];
}
