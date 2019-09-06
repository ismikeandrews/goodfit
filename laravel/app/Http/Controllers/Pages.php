<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
  public function home(){
    return view('welcome');
  }

  public function usuariosCadastro(){
    return view('usuariosCadastro');
  }

  public function niveisCadastro(){
    return view('niveisCadastro');
  }

  public function enderecos(){
    return view('enderecos');
  }
}
