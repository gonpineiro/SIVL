<?php

namespace App\Http\Controllers;
use App\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function show(){
      $marca = Marca::all();

      return view('tables.marcas', [
        'marcas' => $marca,
        ]);
      }
}
