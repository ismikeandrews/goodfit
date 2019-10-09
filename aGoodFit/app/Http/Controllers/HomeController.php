<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $usuario = Auth::user();
      $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
        return view('home')->with('candidato', $candidato);
    }
}
