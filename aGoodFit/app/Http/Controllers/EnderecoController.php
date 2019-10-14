<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;
use Auth;
use Illuminate\Support\Facades\DB;

class EnderecoController extends Controller
{
  public function formularioEnderecoCand(){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')
    ->where('codUsuario', $usuario->codUsuario)->first();

    return view('endereco.endereco-candidato')
    ->with('candidato', $candidato);
  }
}
