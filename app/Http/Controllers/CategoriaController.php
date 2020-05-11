<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CategoriaController extends Controller
{
    /**
     * Cadastra uma nova categoria
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     * @author Vanessa Amaral Marques
     */
    public function cadastroCategoria(Request $request){
    	$this->validate($request, [
    		'nomeCategoria' => 'required|max:100|string|unique:tbCategoria,nomeCategoria'
    	]);

    	try {
            $categoria = Categoria::create([
                'nomeCategoria' => $request->input('nomeCategoria'),
            ]);

            if ( $categoria->save() ) {
                return response()->json('Categoria cadastrada com sucesso');
            }

            throw new \Exception('Erro ao tentar cadastrar categoria');
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 503);
        }
    }

    /**
     * Retorna as categorias cadastradas
     *
     * @return JsonResponse Collection
     * @author Vanessa Amaral Marques
     */
    public function getCategorias(){
    	$categorias = DB::table('tbCategoria')
	      ->select('tbCategoria.codCategoria', 'tbCategoria.nomeCategoria', 'tbCategoria.imagemCategoria')
	      ->orderBy('tbCategoria.nomeCategoria')
	      ->get();

    	return response()->json($categorias);
    }

    /**
     * Retorna todos as categorias de um curriculo
     *
     * @param int $codCurriculo codigo do curriculo
     * @return JsonResponse Collection
     * @author Vanessa Amaral Marques
     */
    public function getCategoriasByCurriculo(int $codCurriculo){
    	$categorias = DB::table('tbCategoria')
	      ->select('tbCategoria.codCategoria', 'tbCategoria.nomeCategoria', 'tbCategoria.imagemCategoria')
	      ->join('tbCargoCurriculo', 'tbCategoria.codCategoria', '=', 'tbCargoCurriculo.codCategoria')
	      ->where('tbCargoCurriculo.codCurriculo', $codCurriculo)
	      ->orderBy('tbCategoria.nomeCategoria')
	      ->get();

    	return response()->json($categorias);
    }
}
