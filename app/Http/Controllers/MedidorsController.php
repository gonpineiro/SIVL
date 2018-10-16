<?php

namespace App\Http\Controllers;
use App\Medidor;
use Illuminate\Http\Request;

class MedidorsController extends Controller
{
  public function create(Request $request){
    echo "Datos ingresados correctamente !!!!";
      $medidor = Medidor::create([

        'identy' => $request->input('identy'),
        'temperatura' => $request->input('temperatura'),
        'humedad' => $request->input('humedad'),
        'estado_luz' => $request->input('estado_luz'),
        'estado_tiempo' => $request->input('estado_tiempo'),
    ]);

  }

}
