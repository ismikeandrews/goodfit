<?php

namespace App\Http\Controllers;

use Auth;
use App\Candidatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

define('EM_ANDAMENTO', 2);

class CandidaturaController extends Controller
{
    public function novaCandidatura(int $codVaga){
    	$usuario = Auth::user();

	    $candidato = DB::table('tbCandidato')
	    ->where('codUsuario', $usuario->codUsuario)->first();

	    Candidatura::create([
	      'codCandidato' => $candidato->codCandidato,
	      'codVaga' => $codVaga,
	      'codStatusCandidatura' => EM_ANDAMENTO
	    ]);
	    
	    return redirect('/vagas');
    }
}
