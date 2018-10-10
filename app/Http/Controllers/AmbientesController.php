<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ambiente;
class AmbientesController extends Controller
{
  public function show(Ambiente $ambiente){


    $ambiente = Ambiente::all();

    return view('tables.ambientes', [
      'ambientes' => $ambiente,
    ]);

  }
}
