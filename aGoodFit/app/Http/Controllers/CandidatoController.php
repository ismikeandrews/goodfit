<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatoController extends Controller
{
  public function formularioCandidato(){
    return view('candForm');
  }

  public function novoCandidato(Request $request){
    
  }
}
