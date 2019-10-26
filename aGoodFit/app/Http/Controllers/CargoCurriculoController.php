<?php

namespace App\Http\Controllers;

use App\CargoCurriculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CargoCurriculoController extends Controller
{
    /**
    * Função para cadastro de cargo em um currículo
    *
    * @param $codCategoria codigo da categoria
    * @param $codCurriculo codigo do curriculo
    *
    * @author Vanessa Amaral Marques
    **/
    public function novoCargoCurriculo(int $codCategoria, int $codCurriculo){
    	CargoCurriculo::create([
	    	'codCategoria' => $codCategoria,
	        'codCurriculo' => $codCurriculo
	    ]);
    }
}
