<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CargoCurriculo;
use App\AdicionalCurriculo;
use Illuminate\Support\Facades\Validator;
use App\Curriculo;
use Auth;
use Illuminate\Support\Facades\DB;


class CurriculoController extends Controller
{
  public function formularioCurriculo(){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')
    ->where('codUsuario', $usuario->codUsuario)->first();

    $curriculo = DB::table('tbCurriculo')
    ->where('codCandidato', $candidato->codCandidato)->first();

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

    $escolaridades = DB::table('tbAdicional')
      ->select('tbAdicional.codAdicional', 'tbAdicional.nomeAdicional', 'tbAdicional.imagemAdicional')
      ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
      ->where('tbTipoAdicional.nomeTipoAdicional', '=', 'Escolaridade')
      ->orderBy('tbAdicional.grauAdicional', 'ASC')
      ->get();

    $niveisAlfabetizacao = DB::table('tbAdicional')
      ->select('tbAdicional.codAdicional', 'tbAdicional.nomeAdicional', 'tbAdicional.imagemAdicional')
      ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
      ->where('tbTipoAdicional.nomeTipoAdicional', '=', 'Alfabetização')
      ->orderBy('tbAdicional.grauAdicional', 'ASC')
      ->get();

    $dados = [
      'habilidades'    => $habilidades,
      'categorias'     => $categorias,
      'escolaridades'  => $escolaridades,
      'alfabetizacoes' => $niveisAlfabetizacao
    ];

    if ($curriculo) {
      //habilidades de um candidato
      $habilidadesCandidato = DB::table('tbAdicional')
      ->select('tbAdicional.codAdicional')
      ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
      ->join('tbAdicionalCurriculo', 'tbAdicionalCurriculo.codAdicional', '=', 'tbAdicional.codAdicional')
      ->where('tbTipoAdicional.nomeTipoAdicional', '=', 'Habilidade')
      ->where('tbAdicionalCurriculo.codCurriculo', '=', $curriculo->codCurriculo)
      ->orderBy('tbAdicional.nomeAdicional', 'ASC')
      ->get();

      $candidato->habilidades = [];
      foreach( $habilidadesCandidato as $habilidadeCandidato ){
        $candidato->habilidades[] = $habilidadeCandidato->codAdicional;
      }

      //categorias de um candidato
      $categoriasCandidato = DB::table('tbCategoria')
      ->select('tbCategoria.codCategoria')
      ->join('tbCargoCurriculo', 'tbCategoria.codCategoria', '=', 'tbCargoCurriculo.codCategoria')
      ->where('tbCargoCurriculo.codCurriculo', '=', $curriculo->codCurriculo)
      ->orderBy('tbCategoria.nomeCategoria')
      ->get();

      $candidato->categorias = [];
      foreach( $categoriasCandidato as $categoriaCandidato ){
        $candidato->categorias[] = $categoriaCandidato->codCategoria;
      }

      $dados['curriculo'] = $curriculo;
      $dados['candidato'] = $candidato;

      return view('curriculo.editarCurriculo', $dados);
    }

    return view('curriculo.curriculo', $dados);
  }

  public function novoCurriculo(Request $request){

    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

    $curriculo = Curriculo::create([
      'videoCurriculo'     => $request->input('videoCandidato'),
      'descricaoCandidato' => $request->input('descricaoCandidato'),
      'codCandidato'       => $candidato->codCandidato,
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
    return redirect('/vagas');
  }

  public function editarCurriculo(Request $request){
    dd($request);
    $usuario   = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
    $curriculo = DB::table('tbCurriculo')
    ->where('codCandidato', $candidato->codCandidato)->first();

    $curriculo->videoCurriculo = $request->input('videoCandidato');
    $curriculo->descricaoCandidato = $request->input('descricaoCandidato');

    $curriculo->save();
  }
}
