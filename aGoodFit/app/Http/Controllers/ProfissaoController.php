<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
