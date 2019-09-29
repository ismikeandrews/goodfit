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

  public function escolhaNivelUsuario(){
    $nivel = NivelUsuario::all();
    return view('escolhaNivel')->with('niveis', $nivel);
  }

  public function validarNivel($codNivelUsuario){
    if($codNivelUsuario == 1){
      return view('auth.registerMod')->with('codNivelUsuario', 1);
    }elseif ($codNivelUsuario == 2) {
      return view('auth.registerCand')->with('codNivelUsuario', 2);
    }elseif ($codNivelUsuario == 3) {
      return view('auth.registerEmp')->with('codNivelUsuario', 3);
    }
  }
}
