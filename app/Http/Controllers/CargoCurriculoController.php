<?php

namespace App\Http\Controllers;

use App\CargoCurriculo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CargoCurriculoController extends Controller
{
    /**
     * Função para cadastro de cargo em um currículo
     *
     * @param int $codCategoria codigo da categoria
     * @param int $codCurriculo codigo do curriculo
     * @return JsonResponse
     * @author Vanessa Amaral Marques
     */
    public function novoCargoCurriculo(int $codCategoria, int $codCurriculo){
    	try{
    	    $cargo = CargoCurriculo::create([
                'codCategoria' => $codCategoria,
                'codCurriculo' => $codCurriculo
            ]);

    	    if ( $cargo->save() ) {
    	        return response()->json('Cargo criado com sucesso', 200);
            }

    	    throw new \Exception('Erro ao tentar criar cargo em currículo');
        } catch (\Exception $e) {
    	    return response()->json($e->getMessage(), 503);
        }
    }

    /**
     * Remove um cargo de um currículo
     *
     * @param int $codCurriculo
     * @return JsonResponse
     * @author Vanessa Amaral Marques
     */
    public function removerCargoByCurriculo(int $codCurriculo){
        $cargo =  DB::table('tbCargoCurriculo')
        ->join('tbCategoria', 'tbCargoCurriculo.codCategoria', '=', 'tbCategoria.codCategoria')
        ->where('tbCargoCurriculo.codCurriculo', '=', $codCurriculo);

        if ( ! $cargo->delete() ) {
            return response()->json('Erro ao excluir cargo', 503);
        }
    }
}
