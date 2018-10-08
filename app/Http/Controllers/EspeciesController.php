<?php

namespace App\Http\Controllers;
use App\Marca;
use App\Especie;
use Illuminate\Http\Request;

class EspeciesController extends Controller
{
  public function show(){


    $especie = Especie::all();
  #  dd($prototype);
    return view('tables.especies', [
      'especies' => $especie,
    ]);

}
}
