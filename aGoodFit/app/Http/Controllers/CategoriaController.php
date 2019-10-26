<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    public function cadastroCategoria(Request $request){

    	$this->validate($request, [
    		'nomeCategoria' => 'required|max:100|string|unique:tbCategoria,nomeCategoria'
    	]);

    	$categoria = Categoria::create([
    		'nomeCategoria' => $request->input('nomeCategoria'),
    	]);

    	return view('cadastroCategoria')->with('ok', $categoria->save());
    }

    /**
    * Função para pegar todos as categorias
    * 
    *
    * @author Vanessa Amaral Marques
    **/
    public function getCategorias(){
    	return DB::table('tbCategoria')
	      ->select('tbCategoria.codCategoria', 'tbCategoria.nomeCategoria', 'tbCategoria.imagemCategoria')
	      ->orderBy('tbCategoria.nomeCategoria')
	      ->get();
    }

    /**
    * Função para pegar todos as categorias de um curriculo
    * 
    * @param $codCurriculo codigo do curriculo
    *
    * @author Vanessa Amaral Marques
    **/
    public function getCategoriasByCurriculo(int $codCurriculo){
    	return DB::table('tbCategoria')
	      ->select('tbCategoria.codCategoria')
	      ->join('tbCargoCurriculo', 'tbCategoria.codCategoria', '=', 'tbCargoCurriculo.codCategoria')
	      ->where('tbCargoCurriculo.codCurriculo', '=', $codCurriculo)
	      ->orderBy('tbCategoria.nomeCategoria')
	      ->get();
    }
}
