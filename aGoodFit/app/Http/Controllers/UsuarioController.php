<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
  /**
  * Função para pegar usuario por codigo
  *
  * @param $codUsuario codigo da vaga
  *
  * @author Michael Andrews
  **/
  public function getUsuarioByCod(int $codUsuario){
    return DB::table('tbUsuario')
    ->where('codUsuario', $codUsuario)
    ->first();
  }
}
