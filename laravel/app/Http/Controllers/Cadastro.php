<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Usuario;
use App\NivelUsuario;
use App\Endereco;

class Cadastro extends Controller
{

  public function cadastrarNivel(Request $request){
    // echo var_dump();
    $this->validate($request, [
      'titulo' => 'required',
      'descricao' => 'required'
    ]);
// dd($request->all());
// dd($request->input('nomeNivelUsuario'));
    $nivelUsuario = NivelUsuario::create([
      'nomeNivelUsuario' => $request->input('titulo'),
      'descricaoNivelUsuario' => $request->input('descricao')
    ]);

    $salvar = $nivelUsuario->save();

    return view('niveisCadastro')
    ->with('ok', $salvar);
  }



//end
}
