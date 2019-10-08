<?php

namespace App\Http\Controllers;

use App\Candidato;
use App\NivelUsuario;
use App\Usuario;
use Auth;

use Illuminate\Http\Request;

class CandidatoController extends Controller
{
  public function login(){
    if (Auth::check()) {
      return redirect('/home');
    }else {
      return view('auth.login');
    }
  }

  public function config(){
    $usuario = Auth::user();
    $candidato = Candidato::where('codUsuario', $usuario->codUsuario);
    return view('configPerfil')
    ->with('usu', $usuario);
  }

  public function formularioCurriculo(){
    return view('curriculo.curriculo');
  }
}
