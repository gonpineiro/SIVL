<?php

namespace App\Http\Controllers;
use App\Sensor;
use Illuminate\Http\Request;

class SensorsController extends Controller
{
  public function show(Request $request){

    $user = $request->user();

    $sensor = Sensor::where('ambiente_id', $user->id)->orderBy('id')->get();


    return view('tables.sensors', [
      'sensors' => $sensor,
    ]);
  }

  public function create(Request $request){
    #dd($request)->input('name');
      $user = $request->user();

      $prototype = Sensor::create([
        'name' => $request->input('name'),
        'ambiente_id' => $request->input('ambiente'),
        'user_id' => $user->id,

    ]);



    return redirect('/form_prototype');
  }

}
