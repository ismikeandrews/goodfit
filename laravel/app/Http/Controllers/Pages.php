<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelUsuario;
use App\Usuario;

class Pages extends Controller
{
  public function home(){
    return view('welcome');
  }

  public function niveis(){
    $nivel = NivelUsuario::all();
    return view('niveisCadastrados')->with('niveis', $nivel);
  }

  public function usuariosCadastro(){
    $nivel = NivelUsuario::all();
    return view('usuariosCadastro')->with('niveis', $nivel);
  }

  public function niveisCadastro(){
    return view('niveisCadastro');
  }

  public function enderecos(){
    return view('enderecos');
  }
}
