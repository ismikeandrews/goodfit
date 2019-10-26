<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeneficioController extends Controller
{
    public function getBeneficioByVaga(int $codVaga){
    	return DB::table('tbBeneficio')
        ->select('tbBeneficio.nomeBeneficio')
        ->where('tbBeneficio.codVaga', '=', $codVaga)
        ->orderBy('tbBeneficio.nomeBeneficio', 'ASC')
        ->get();
    }
}
