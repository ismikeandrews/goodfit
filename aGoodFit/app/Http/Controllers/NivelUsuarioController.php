<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelUsuario;
use Auth;

class NivelUsuarioController extends Controller
{
  public function novoNivel(Request $request){

    $this->validate($request, [
      'titulo' => 'required|unique:tbNivelUsuario,nomeNivelUsuario',
    ]);


    $nivelUsuario = NivelUsuario::create([
      'nomeNivelUsuario' => $request->input('titulo'),
    ]);

    $salvar = $nivelUsuario->save();

    return view('cadastroNivelUsuario')
    ->with('ok', $salvar);
  }

  public function formularioNivelUsuario(){
    return view('cadastroNivelUsuario');
  }

  public function niveisUsuario(){
    $nivel = NivelUsuario::all();
    return view('niveisCadastrados')->with('niveis', $nivel);
  }

  public function deletarNivel($codNivelUsuario){
    $deletar = NivelUsuario::where('codNivelUsuario', $codNivelUsuario);
    $deletar->delete();
    return redirect('/nivelusuario');
  }

  public function validarNivel(){
    if(Auth::user()->codNivelUsuario == 1){
      return redirect('/moderador/form');
    }elseif (Auth::user()->codNivelUsuario == 2) {
      return redirect('/candidato/cadastro');
    }elseif (Auth::user()->codNivelUsuario == 3) {
      return redirect('/empresa/form');
    }
  }
}
