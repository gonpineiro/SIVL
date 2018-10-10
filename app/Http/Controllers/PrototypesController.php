<?php

namespace App\Http\Controllers;
use App\Prototype;
use App\Ambiente;
use App\Sensor;
use App\Especie;
use Illuminate\Http\Request;

class PrototypesController extends Controller
{
  public function show(Prototype $prototype){

    $prototype = Prototype::all();
    $ambiente = Ambiente::all();

    #dd($prototype);
    return view('tables.prototypes', [
      'prototypes' => $prototype,
      'ambientes' => $ambiente,
    ]);

  }

  public function form(Prototype $prototype){
    $ambiente = Ambiente::all();
    $sensor = Sensor::all();
    $especie = Especie::all();
    #dd($prototype);
    return view('forms.prototype', [
      'ambientes' => $ambiente,
      'sensors' => $sensor,
      'especies' => $especie,
    ]);

  }

  public function create(Request $request){

      $prototype = Prototype::create([
        'name' => $request->input('name'),
        'ambiente_id' => $request->input('ambiente'),
        'especie_id' => $request->input('especie'),
        'sensor_id' => $request->input('sensor')
    ]);

    return redirect('/prototypes');
  }
}
