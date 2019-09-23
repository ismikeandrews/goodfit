<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
