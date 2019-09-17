<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeradorController extends Controller
{
  public function formularioModerador(){
    return view('modForm');
  }

  public function cadastroModerador(Request $request){
    $this->validate($request, [
    'nomeAdministrador' => 'required',
    'cpfAdministrador' => 'required',
  ]);


  }
}
