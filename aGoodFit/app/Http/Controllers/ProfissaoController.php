<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfissaoController extends Controller
{
    public function cadastroProfissao(Request $request){

    	$this->validate($request, [
    		'nomeProfissao' => 'required|max:100|string',
    		'codCategoria'  => 'required|integer'
    	]);

    	$profissao = Profissao::create([
    		'nomeProfissao' => $request->input('nomeProfissao'),
    		'codCategoria'  => $request->input('codCategoria')
    	]);

    	return view('cadastroProfissao')->with('ok', $profissao->save());
    }

    /**
    * Função para pegar uma profissao por codigo
    *
    * @param $codProfissao codigo da profissao
    *
    * @author Vanessa Amaral Marques
    **/
    public function getProfissaoByCod(int $codProfissao){
        return DB::table('tbProfissao')
        ->select('tbProfissao.nomeProfissao')
        ->where('tbProfissao.codProfissao', '=', $codProfissao)
        ->first();
    }
}
