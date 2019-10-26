<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    public function getEmpresaByCod(int $codEmpresa){
    	return DB::table('tbEmpresa')
        ->select('tbEmpresa.nomeFantasiaEmpresa')
        ->where('tbEmpresa.codEmpresa', '=', $codEmpresa)
        ->get();
    }
}
