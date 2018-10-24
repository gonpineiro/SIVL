<?php

namespace App\Http\Controllers;
use App\Medidor;
use Illuminate\Http\Request;

class MedidorsController extends Controller
{
  public function create(Request $request){
    return "Datos ingresados correctamente !!!!";
      $medidor = Medidor::create([

        'identity' => $request->input('identity'),
        'temperatura' => $request->input('temperatura'),
        'humedad' => $request->input('humedad'),
        'estado_luz' => $request->input('estado_luz'),
        'estado_tiempo' => $request->input('estado_tiempo'),
    ]);

  }

    public function show(Request $request){
      return "Datos ingresados correctamente !!!!";
    }

}
