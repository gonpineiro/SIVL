<?php

namespace App\Http\Controllers;
use App\Ambiente;
use Illuminate\Http\Request;

class AmbientesController extends Controller
{
  public function show(Request $request){

    $user = $request->user();

    $ambiente = Ambiente::where('user_id', $user->id)->orderBy('id')->get();

    return view('tables.ambientes', [
      'ambientes' => $ambiente,
    ]);

  }

  public function form(Request $request){

    $ambiente = Ambiente::where('user_id', $user->id)->orderBy('id')->get();

    return view('forms.ambiente', [
      'ambientes' => $ambiente,
    ]);

  }

  public function create(Request $request){

      $user = $request->user();

      $prototype = Ambiente::create([
        'user_id' => $user->id,
        'identity' => $request->input('identity'),
        'token_blink' => $request->input('token_blink'),
        'ip_adress' => $request->input('ip_adress'),
    ]);

    return redirect('/form_prototype');
  }
}
