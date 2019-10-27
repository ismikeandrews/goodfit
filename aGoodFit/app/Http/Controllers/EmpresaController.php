<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
	/**
    * Função para pegar empresa por codigo
    *
    * @param $codEmpresa codigo da empresa
    *
    * @author Vanessa Amaral Marques
    **/
    public function getEmpresaByCod(int $codEmpresa){
    	return DB::table('tbEmpresa')
        ->select('tbEmpresa.nomeFantasiaEmpresa')
        ->where('tbEmpresa.codEmpresa', '=', $codEmpresa)
        ->first();
    }
}
