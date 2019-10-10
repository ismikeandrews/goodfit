<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CargoCurriculo;
use App\AdicionalCurriculo;
use App\Curriculo;
use Auth;
use Illuminate\Support\Facades\DB;


class CurriculoController extends Controller
{
  public function formularioCurriculo(){
    $habilidades = DB::table('tbAdicional')
        ->select('tbAdicional.codAdicional', 'tbAdicional.nomeAdicional', 'tbAdicional.imagemAdicional')
        ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
        ->where('tbTipoAdicional.nomeTipoAdicional', '=', 'Habilidade')
        ->orderBy('tbAdicional.nomeAdicional', 'ASC')
        ->get();
    $categorias = DB::table('tbCategoria')
      ->select('tbCategoria.codCategoria', 'tbCategoria.nomeCategoria', 'tbCategoria.imagemCategoria')
      ->orderBy('tbCategoria.nomeCategoria')
      ->get();
    $dados = [
      'habilidades' => $habilidades,
      'categorias'  => $categorias
    ];

    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
    return view('curriculo.curriculo', $dados)->with('candidato', $candidato);
  }

  public function paginaStatus(){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
    return view('status')->with('candidato', $candidato);
  }

  public function novoCurriculo(Request $request){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

    $curriculo = Curriculo::create([
      'videoCurriculo' => $request->input('videoCandidato'),
      'descricaoCandidato' => $request->input('descricaoCandidato'),
      'codCandidato' => $candidato->codCandidato,
    ]);

    foreach ($request->habilidades as $key) {
      AdicionalCurriculo::create([
        'codAdicional' => $key,
        'codCurriculo' => $curriculo->codCurriculo,
      ]);
    }

    foreach ($request->categorias as $key) {
      CargoCurriculo::create([
        'codCategoria' => $key,
        'codCurriculo' => $curriculo->codCurriculo,
      ]);
    }
    return redirect('/home');
  }
}
