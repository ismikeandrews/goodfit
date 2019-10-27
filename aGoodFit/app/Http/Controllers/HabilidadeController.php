<?php

namespace App\Http\Controllers;

use App\AdicionalCurriculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HabilidadeController extends Controller
{

	/**
	* Função para pegar todas as habilidades
	*
	*
	* @author Vanessa Amaral Marques
	**/
	public function getHabilidades(){
		return DB::table('tbAdicional')
	    ->select('tbAdicional.codAdicional', 'tbAdicional.nomeAdicional', 'tbAdicional.imagemAdicional')
	    ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
	    ->where('tbTipoAdicional.nomeTipoAdicional', '=', 'Habilidade')
	    ->orderBy('tbAdicional.nomeAdicional', 'ASC')
	    ->get();
	}

	/**
	* Função para pegar as habilidades em um curriculo
	*
	* @param $codCurriculo cod do curriculo do candidato
	*
	*
	* @author Vanessa Amaral Marques
	**/
	public function getHabilidadesByCurriculo(int $codCurriculo){
		return DB::table('tbAdicional')
	      ->select('tbAdicional.codAdicional')
	      ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
	      ->join('tbAdicionalCurriculo', 'tbAdicionalCurriculo.codAdicional', '=', 'tbAdicional.codAdicional')
	      ->where('tbTipoAdicional.nomeTipoAdicional', '=', 'Habilidade')
	      ->where('tbAdicionalCurriculo.codCurriculo', '=', $codCurriculo)
	      ->orderBy('tbAdicional.nomeAdicional', 'ASC')
	      ->get();
	}

	/**
	* Função para adicionar habilidades em um curriculo
	*
	* @param $codAdicional cod do adicional
	* @param $codCurriculo cod do curriculo do candidato
	*
	*
	* @author Vanessa Amaral Marques
	**/
	public function adicionarHabilidade(int $codAdicional, int $codCurriculo){
	    return AdicionalCurriculo::create([
	    	'codAdicional' => $codAdicional,
	    	'codCurriculo' => $codCurriculo
	    ]);
	}

  /**
  * Função para remover habilidades de um candidato
  *
  * @param $codCurriculo cod do curriculo do candidato
  *
  *
  * @author Vanessa Amaral Marques
  **/
  public function removerHabilidades(int $codCurriculo){
    return DB::table('tbAdicionalCurriculo')
    ->where('codCurriculo', $codCurriculo)
    ->delete();
  }
}
