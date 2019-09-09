<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelUsuario;
use App\Endereco;
use App\Usuario;

class Atualizar extends Controller
{
//inicio

  public function deletarNivel($codNivelUsuario){

    $deletar = NivelUsuario::where('codNivelUsuario', $codNivelUsuario);


   $deletar->delete();

    return redirect('/niveis');
  }

//fim
}
