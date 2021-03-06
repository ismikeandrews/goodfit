<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoAdicionalController extends Controller
{
    public function cadastroTipoAdicional(Request $request){

    	$this->validate($request, [
    		'nomeTipoAdicioal' => 'required|unique:tbTipoAdicionalCurriculo,nomeTipoAdicioal|max:100|string',
    		'grauTipoAdicional' => 'required|boolean'
    	]);

    	$tipoAdicional = TipoAdicional::create([
    		'nomeTipoAdicioal' => $request->input('nomeTipoAdicioal'),
    		'grauTipoAdicional' => $request->input('grauTipoAdicional')
    	]);

    	return view('cadastroTipoAdicional')->with('ok', $tipoAdicional->save());
    }

    public function getTipoAdicionalByNome(string $nomeTipoAdicional){
        return DB::table('tbTipoAdicional')
        ->select('tbTipoAdicional.codTipoAdicional')
        ->where('tbTipoAdicional.nomeTipoAdicional', '=', $nomeTipoAdicional)
        ->first();
    }
}