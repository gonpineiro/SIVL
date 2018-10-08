<?php

namespace App\Http\Controllers;
use App\Marca;
use App\Especie;
use Illuminate\Http\Request;

class MarcasEspeciesController extends Controller
{
  public function show(){

    $marca = Marca::all();
    $especie = Especie::all();
  #  dd($prototype);
    return view('tables.especies', [
      'marcas' => $marca,
      'especies' => $especie,
    ]);

}
}
