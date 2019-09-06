<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelUsuario;

class Cadastro extends Controller
{

  public function cadastrarNivel(Request $request){
    // dd($request->all());
    $this->validate($request, [
      'titulo' => 'required',
      'descricao' => 'required'
    ]);

    $nivelUsuario = NivelUsuario::create([
      'titulo' => $request->input('nomeNivelUsuario'),
      'descricao' => $request->input('descricaoNivelUsuario')
    ]);

    $salvar = $nivelUsuario->save();

    return view('niveisCadastro')
    ->with('ok', $salvar);
  }

//end
}
