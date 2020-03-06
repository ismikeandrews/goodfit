<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelUsuario;
use Illuminate\Support\Facades\DB;

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

  public function getUsuarioById(int $codNivelUsuario){
    return DB::table('tbNivelUsuario')
    ->select('tbNivelUsuario.nomeNivelUsuario')
    ->where('tbNivelUsuario.codNivelUsuario', '=', $codNivelUsuario)
    ->first();
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
}
