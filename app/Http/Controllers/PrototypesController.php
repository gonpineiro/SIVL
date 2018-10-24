<?php

namespace App\Http\Controllers;
use App\Prototype;
use App\Ambiente;
use App\Sensor;
use App\Especie;
use Illuminate\Http\Request;
use Carbon\Carbon;


class PrototypesController extends Controller
{

  public function show(Request $request){

    $user = $request->user();
    $now = Carbon::now();
    $prototype = Prototype::where('user_id', $user->id)->orderBy('id')->get();
    $ambiente = Ambiente::where('user_id', $user->id)->orderBy('id')->get();


    return view('tables.prototypes', [
      'now' => $now,
      'prototypes' => $prototype,
      'ambientes' => $ambiente,
    ]);

  }

  public function form(Request $request){

    $user = $request->user();

    $ambiente = Ambiente::where('user_id', $user->id)->orderBy('id')->get();
    $sensor = Sensor::where('user_id', $user->id)->orderBy('id')->get();
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
