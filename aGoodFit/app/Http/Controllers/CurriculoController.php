<?php

namespace App\Http\Controllers;

use Auth;
use App\CargoCurriculo;
use App\Curriculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CurriculoController extends Controller
{
  public function formularioCurriculo(){
    $adicionalController  = new adicionalController;
    $categoriaController  = new categoriaController;
    $habilidadeController = new habilidadeController;
    
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')
    ->where('codUsuario', $usuario->codUsuario)->first();

    $curriculo = DB::table('tbCurriculo')
    ->where('codCandidato', $candidato->codCandidato)->first();

    $habilidades         = $habilidadeController->getHabilidades();
    $categorias          = $categoriaController->getCategorias();
    $escolaridades       = $adicionalController->getAdicionalByNomeTipoAdicional('Escolaridade');
    $niveisAlfabetizacao = $adicionalController->getAdicionalByNomeTipoAdicional('Alfabetização');

    $dados = [
      'habilidades'    => $habilidades,
      'categorias'     => $categorias,
      'escolaridades'  => $escolaridades,
      'alfabetizacoes' => $niveisAlfabetizacao
    ];

    if ($curriculo) {
      //habilidades de um candidato
      $habilidadesCandidato = $habilidadeController->getHabilidadesByCurriculo($curriculo->codCurriculo);

      $candidato->habilidades = [];
      foreach( $habilidadesCandidato as $habilidadeCandidato ){
        $candidato->habilidades[] = $habilidadeCandidato->codAdicional;
      }

      //categorias de um candidato
      $categoriasCandidato = $categoriaController->getCategoriasByCurriculo($curriculo->codCurriculo);

      $candidato->categorias = [];
      foreach( $categoriasCandidato as $categoriaCandidato ){
        $candidato->categorias[] = $categoriaCandidato->codCategoria;
      }

      $dados['curriculo'] = $curriculo;
      $dados['candidato'] = $candidato;
    }

    return view('curriculo.curriculo', $dados);
  }

  /**
    * Função para cadastro do currículo
    *
    * @param $request dados do formulário
    *
    * @author Michael Andrews
    **/
  public function novoCurriculo(Request $request){
    $adicionalController = new adicionalController;

    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

    $curriculo = Curriculo::create([
      'videoCurriculo'     => $request->input('videoCandidato'),
      'descricaoCandidato' => $request->input('descricaoCandidato'),
      'codCandidato'       => $candidato->codCandidato,
    ]);

    foreach ($request->habilidades as $key) {
      $adicionalController->novoAdicionalCurriculo($key, $curriculo->codCurriculo);
    }

    foreach ($request->categorias as $key) {
      CargoCurriculo::create([
        'codCategoria' => $key,
        'codCurriculo' => $curriculo->codCurriculo,
      ]);
    }
    return redirect('/vagas');
  }

  /**
    * Função para editar o currículo
    *
    * @param $request dados do formulário
    *
    * @author Vanessa Amaral Marques
    **/
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
