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
        'habilidades' => $habilidades,
        'categorias' => $categorias,
        'escolaridades' => $escolaridades,
        'alfabetizacoes' => $niveisAlfabetizacao
      ];

    if ($curriculo != null) {
      $cargos = DB::table('tbCargoCurriculo')
      ->where('codCurriculo', $curriculo->codCurriculo)->get();

      $adicionais = DB::table('tbAdicionalCurriculo')
      ->where('codCurriculo', $curriculo->codCurriculo)->get();

      return view('curriculo.editarCurriculo', $dados)
      ->with('candidato', $candidato)
      ->with('curriculo', $curriculo)
      ->with('adicionais', $adicionais)
      ->with('cargos', $cargos);
    }
    else {
      return view('curriculo.curriculo', $dados)
      ->with('usuario', $usuario);
    }
  }

  public function formularioCurriculoLogin(){
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
        'habilidades' => $habilidades,
        'categorias' => $categorias,
        'escolaridades' => $escolaridades,
        'alfabetizacoes' => $niveisAlfabetizacao
      ];

    if ($curriculo != null) {
      return redirect('/vagas');
    }
    else {
      return view('curriculo.curriculo', $dados)
      ->with('candidato', $candidato);
    }
  }

  public function paginaStatus(){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
    return view('status')->with('usuario', $usuario);
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
    return redirect('/vagas');
  }
}
