<?php

namespace App\Http\Controllers;

use App\AdicionalCurriculo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HabilidadeController extends Controller
{

    /**
     * Retorna as habilidades cadastradas
     *
     * @return JsonResponse
     * @author Vanessa Amaral Marques
     */
	public function getHabilidades(){
		$habilidades = DB::table('tbAdicional')
	    ->select('tbAdicional.codAdicional', 'tbAdicional.nomeAdicional', 'tbAdicional.imagemAdicional')
	    ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
	    ->where('tbTipoAdicional.nomeTipoAdicional', '=', 'Habilidade')
	    ->orderBy('tbAdicional.nomeAdicional', 'ASC')
	    ->get();

		return response()->json($habilidades);
	}

    /**
     * Retorna as habilidades de um curriculo
     *
     * @param int $codCurriculo cod do curriculo do candidato
     * @return Collection
     * @author Vanessa Amaral Marques
     */
	public function getHabilidadesByCurriculo(int $codCurriculo){
		$habilidades = DB::table('tbAdicional')
	      ->select('tbAdicional.codAdicional', 'tbAdicional.nomeAdicional' , 'tbAdicional.imagemAdicional')
	      ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
	      ->join('tbAdicionalCurriculo', 'tbAdicionalCurriculo.codAdicional', '=', 'tbAdicional.codAdicional')
	      ->where('tbTipoAdicional.nomeTipoAdicional', '=', 'Habilidade')
	      ->where('tbAdicionalCurriculo.codCurriculo', '=', $codCurriculo)
	      ->orderBy('tbAdicional.nomeAdicional', 'ASC')
	      ->get();

		return response()->json($habilidades);
	}

    /**
     * Adiciona habilidades em um curriculo
     *
     * @param int $codAdicional cod do adicional
     * @param int $codCurriculo cod do curriculo do candidato
     * @return JsonResponse
     * @author Vanessa Amaral Marques
     */
    public function adicionarHabilidade(int $codAdicional, int $codCurriculo){
        $adicional = AdicionalCurriculo::create([
            'codAdicional' => $codAdicional,
            'codCurriculo' => $codCurriculo
        ]);

        if ( ! $adicional->save() ) {
            return response()->json('Erro ao criar adicional', 503);
        }
    }

    /**
     * Função para remover habilidades de um candidato
     *
     * @param int $codCurriculo cod do curriculo do candidato
     * @return JsonResponse
     * @author Vanessa Amaral Marques
     */
    public function removerHabilidades(int $codCurriculo){
        $habilidade = DB::table('tbAdicionalCurriculo')
        ->where('codCurriculo', $codCurriculo);

        if ( ! $habilidade->delete() ) {
            return response()->json('Erro ao remover habilidade', 503);
        }
    }
}
