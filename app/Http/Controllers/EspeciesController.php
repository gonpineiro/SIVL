<?php

namespace App\Http\Controllers;
use App\Marca;
use App\Especie;
use App\Type;
use App\Variedad;
use Illuminate\Http\Request;

class EspeciesController extends Controller
{
  public function show(Especie $especie){


    $especie = Especie::all();
    $marca = Marca::all();
    $type= Type::all();
    $variedad= Variedad::all();
  #  dd($prototype);
    return view('tables.especies', [
      'especies' => $especie,
      'marcas' => $marca,
      'types' => $type,
      'variedads' => $variedad,
    ]);

  }

  public function create(Request $request){

      $especie = Especie::create([
      'name' => $request->input('name'),
      'marca_id' => $request->input('marca'),
      'thc' => $request->input('thc'),
      'cbd' => $request->input('cbd'),
      'cantidad_in' => $request->input('cantidad_in'),
      'cantidad_ex' => $request->input('cantidad_ex'),
      'ciclo' => $request->input('ciclo'),
      'type_id' => $request->input('type'),
      'variedad_id' => $request->input('variedad')
    ]);

    return redirect('/especies');
  }
}
