<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
