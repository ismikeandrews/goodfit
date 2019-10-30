<?php

namespace App\Http\Controllers;

use App\AdicionalCurriculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdicionalController extends Controller
{
    public function cadastroAdicional(Request $request){

    	$this->validate($request, [
    		'nomeAdicional' => 'required|max:100|string',
    		'grauAdicional' => 'required|integer',
    		'codTipoAdicional' => 'required|integer'
    	]);

    	$adicional = Adicional::create([
    		'nomeAdicional' => $request->input('nomeAdicional'),
    		'grauAdicional' => $request->input('grauAdicional'),
    		'codTipoAdicional' => $request->input('codTipoAdicional')
    	]);

    	return view('cadastroAdicional')->with('ok', $adicional->save());
	  }

    /**
    * Função para pegar todos os adicionais pelo nome do tipo
    * 
    * @param $nomeTipoAdicional nome do tipo
    *
    * @author Vanessa Amaral Marques
    **/
    public function getAdicionalByNomeTipoAdicional(string $nomeTipoAdicional){
        return DB::table('tbAdicional')
          ->select('tbAdicional.codAdicional', 'tbAdicional.nomeAdicional', 'tbAdicional.imagemAdicional')
          ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
          ->where('tbTipoAdicional.nomeTipoAdicional', '=', $nomeTipoAdicional)
          ->orderBy('tbAdicional.grauAdicional', 'ASC')
          ->get();
    }

    /**
    * Função para pegar todos os adicionais pelo nome do tipo e cod do curriculo
    * 
    * @param $nomeTipoAdicional nome do tipo
    * @param $codCurriculo codigo do curriculo
    *
    * @author Vanessa Amaral Marques
    **/
    public function getAdicionalByNomeTipoAndCurriculo(string $nomeTipoAdicional, int $codCurriculo){
        return DB::table('tbAdicional')
          ->select('tbAdicional.codAdicional', 'tbAdicional.nomeAdicional', 'tbAdicional.imagemAdicional')
          ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
          ->join('tbAdicionalCurriculo', 'tbAdicional.codAdicional', '=', 'tbAdicionalCurriculo.codAdicional')
          ->where('tbTipoAdicional.nomeTipoAdicional', $nomeTipoAdicional)
          ->where('tbAdicionalCurriculo.codCurriculo', $codCurriculo)
          ->first();
    }

    /**
    * Função para cadastrar um adicional em um currículo
    * 
    * @param $codAdicional codigo do adicional
    * @param $codCurriculo codigo do curriculo
    *
    * @author Vanessa Amaral Marques
    **/
    public function novoAdicionalCurriculo(int $codAdicional, int $codCurriculo){
      AdicionalCurriculo::create([
        'codAdicional' => $codAdicional,
        'codCurriculo' => $codCurriculo,
      ]);
    }

    /**
    * Função para remover adicionais de um currículo pelo tipo
    * 
    * @param $codTipoAdicional codigo do tipo do adicional
    * @param $codCurriculo codigo do curriculo
    *
    * @author Vanessa Amaral Marques
    **/
    public function removerAdicionalCurriculo(int $codTipoAdicional, int $codCurriculo){
        return DB::table('tbAdicionalCurriculo')
          ->join('tbAdicional', 'tbAdicionalCurriculo.codAdicional', '=', 'tbAdicional.codAdicional')
          ->where('tbAdicional.codTipoAdicional', '=', $codTipoAdicional)
          ->where('tbAdicionalCurriculo.codCurriculo', '=', $codCurriculo)
          ->delete();
    }
}
