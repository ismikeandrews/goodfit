<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Beneficio;

class BeneficioController extends Controller
{
    /**
     * Função para pegar todos os beneficios de uma vaga
     *
     * @param int $codVaga
     * @return JsonResponse
     * @author Vanessa Amaral Marques
     **/
    public function getBeneficioByVaga(int $codVaga){
    	$beneficios =  DB::table('tbBeneficio')
        ->select('tbBeneficio.nomeBeneficio')
        ->where('tbBeneficio.codVaga', '=', $codVaga)
        ->orderBy('tbBeneficio.nomeBeneficio', 'ASC')
        ->get();

    	return response()->json($beneficios, 200);
    }

    /**
     * Função para cadastrar um novo beneficios de uma vaga
     *
     * @param string $nome
     * @param int $codVaga
     * @return JsonResponse
     * @author Michael Andrews
     * @author Vanessa Amaral Marques
     */
    public function novoBeneficio(string $nome, int $codVaga){
        try {
            $beneficio = Beneficio::create([
                'nomeBeneficio' => $nome,
                'codVaga'       => $codVaga,
            ]);

            if ( ! $beneficio->save() ) {
                throw new \Exception('Erro ao tentar cadastrar benefício');
            }
        } catch ( \Exception $e ) {
            return response()->json($e->getMessage(), 503);
        }
    }
}
