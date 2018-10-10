<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateMarcaRequest;
use App\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function show(Marca $marca){
      $marca = Marca::all();

      return view('tables.marcas', [
        'marcas' => $marca,
        ]);
      }

    public function create(Request $request){

        $marca = Marca::create([
        'name' => $request->input('name'),
        'price_3' => $request->input('price_3'),
        'price_5' => $request->input('price_5')
      ]);

      return redirect('/marcas');
    }
}
