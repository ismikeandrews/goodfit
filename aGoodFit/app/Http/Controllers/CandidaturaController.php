<?php

namespace App\Http\Controllers;

use Auth;
use App\Candidatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

define('EM_ANDAMENTO', 2);

class CandidaturaController extends Controller
{
	/**
    * Função para cadastrar uma candidatura
    *
    * @param $codCategoria codigo da categoria
    * @param $codCurriculo codigo do curriculo
    *
    * @author Vanessa Amaral Marques
    **/
    public function novaCandidatura(int $codVaga){
    	$usuario = Auth::user();

	    $candidato = DB::table('tbCandidato')
	    ->where('codUsuario', $usuario->codUsuario)->first();

	    Candidatura::create([
	      'codCandidato' => $candidato->codCandidato,
	      'codVaga' => $codVaga,
	      'codStatusCandidatura' => EM_ANDAMENTO
	    ]);

	    return redirect('/vagas');
    }
    /**
      * Função para deletar uma candidatura
      *
      * @param $codVaga
      *
      * @author Michael Andrews
      **/

    public function excluirCandidatura(int $codVaga){
      $usuario = Auth::user();

	    $candidato = DB::table('tbCandidato')
	    ->where('codUsuario', $usuario->codUsuario)->first();

      $candidatura = Candidatura::where('codCandidato', '=', $candidato->codCandidato)
      ->where('codVaga', '=',  $codVaga);

      $candidatura->delete();
      return redirect("/candidatura");
    }
}
