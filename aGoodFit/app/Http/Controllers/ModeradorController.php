<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeradorController extends Controller
{
  public function formularioModerador(){
    return view('modForm');
  }

}
