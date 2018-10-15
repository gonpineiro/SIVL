<?php

namespace App\Http\Controllers;
use App\Prototype;
use App\Ambiente;
use App\Sensor;
use App\Especie;
use Illuminate\Http\Request;



class PrototypesController extends Controller
{

  public function show(Request $request){

    $user = $request->user();

    $prototype = Prototype::where('user_id', $user->id)->orderBy('id')->get();
    $ambiente = Ambiente::where('user_id', $user->id)->orderBy('id')->get();

  
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

      $user = $request->user();

      $prototype = Prototype::create([
        'name' => $request->input('name'),
        'ambiente_id' => $request->input('ambiente'),
        'especie_id' => $request->input('especie'),
        'user_id' => $user->id,
        'sensor_id' => $request->input('sensor'),
    ]);

    return redirect('/prototypes');
  }
}
