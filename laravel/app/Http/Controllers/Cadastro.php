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
//beging
//Codigos ulteis:
// dd($request->all());
// echo var_dump();

  public function cadastrarNivel(Request $request){

    $this->validate($request, [
      'titulo' => 'required',
      'descricao' => 'required'
    ]);


    $nivelUsuario = NivelUsuario::create([
      'nomeNivelUsuario' => $request->input('titulo'),
      'descricaoNivelUsuario' => $request->input('descricao')
    ]);

    $salvar = $nivelUsuario->save();

    return view('niveisCadastro')
    ->with('ok', $salvar);
  }

  public function cadastrarUsuario(Request $request){
// dd($request->all());
    $this->validate($request, [
      'login' => 'required',
      'email' => 'required',
      'nivel' => 'required|numeric',
      'senha' => 'required'
    ]);

    $usuario = Usuario::create([
      'loginUsuario' => $request->input('login'),
      'emailUsuario' => $request->input('email'),
      'codNivelUsuario' => $request->input('nivel'),
      'senhaUsuario' => $request->input('senha')
    ]);

    $salvar = $usuario->save();
    $nivel = NivelUsuario::all();

    return view('usuariosCadastro')
    ->with('ok', $salvar)->with('niveis', $nivel);
  }

//end
}
