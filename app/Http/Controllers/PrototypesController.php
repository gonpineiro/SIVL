<?php

namespace App\Http\Controllers;
use App\Prototype;
use App\Ambiente;
use Illuminate\Http\Request;

class PrototypesController extends Controller
{
  public function show(){

    $prototype = Prototype::all();
    $ambiente = Ambiente::all();
  #  dd($prototype);
    return view('tables.prototypes', [
      'prototypes' => $prototype,
      'ambientes' => $ambiente,
    ]);

  }
}
