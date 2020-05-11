<?php

namespace App\Http\Controllers;

use Auth;
use App\Candidatura;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

define('EM_ANDAMENTO', 2);

class CandidaturaController extends Controller
{
    private $usuario;
    private $candidato;

    public function __construct() {
        $this->usuario   = Auth::user();
        $this->candidato = DB::table('tbCandidato')->where('codUsuario', $this->usuario->codUsuario)->first();
    }

    /**
     * Função para cadastrar uma candidatura
     *
     * @param int $codVaga
     * @return RedirectResponse|Redirector
     * @author Vanessa Amaral Marques
    */
    public function novaCandidatura(int $codVaga){
	    try{
            $candidatura = Candidatura::create([
                'codCandidato'         => $this->candidato->codCandidato,
                'codVaga'              => $codVaga,
                'codStatusCandidatura' => EM_ANDAMENTO
            ]);

            if ( $candidatura->save() ) {
                return response()->json('Candidatura criada com sucesso', 200);
            }

            throw new \Exception('Erro ao tentar se candidatar');
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 503);
        }
    }

    /**
     * Função para deletar uma candidatura
     *
     * @param $codVaga
     * @return RedirectResponse|Redirector
     * @author Michael Andrews
     * @author Vanessa Amaral Marques
     **/
    public function excluirCandidatura(int $codVaga){
      $candidatura = Candidatura::where('codCandidato', '=', $this->candidato->codCandidato)
      ->where('codVaga', '=',  $codVaga);

      if ( ! $candidatura->delete() ) {
          return response()->json('Erro ao tentar remover candidatura', 503);
      }
    }
}
