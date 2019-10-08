<?php

namespace App\Http\Controllers;

use App\Candidato;
use App\NivelUsuario;
use App\Usuario;
use Illuminate\Support\Facades\DB;
use Image;
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
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
    return view('configPerfil')
    ->with('candidato', $candidato)
    ->with('usuario', $usuario);
  }

  public function atualizarPerfil(Request $request){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

    if($request->hasFile('foto')) {

      $foto = $request->file('foto');
      $nome = time() . '.' . $foto->getClientOriginalExtension();

      Image::make($foto)->resize(300, 300)->save(public_path('/images/candidatos/'.$nome));

      DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->update(['fotoCandidato' => $nome]);
    }

    return view('configPerfil')
    ->with('candidato', $candidato)
    ->with('usuario', $usuario);
  }

  public function formularioCurriculo(){
    return view('curriculo.curriculo');
  }
}
