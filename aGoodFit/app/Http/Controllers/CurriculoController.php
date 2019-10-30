<?php

namespace App\Http\Controllers;

use Auth;
use App\Curriculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CurriculoController extends Controller
{
  public function index(){
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
      //Habilidades
      $candidato->habilidades = $habilidadeController->getHabilidadesByCurriculo($curriculo->codCurriculo);

      //Categorias
      $candidato->categorias = $categoriaController->getCategoriasByCurriculo($curriculo->codCurriculo);

      //Escolaridade
      $curriculo->escolaridade = $adicionalController->getAdicionalByNomeTipoAndCurriculo('Escolaridade', $curriculo->codCurriculo);

      //Alfabetização
      $curriculo->alfabetizacao = $adicionalController->getAdicionalByNomeTipoAndCurriculo('Alfabetização', $curriculo->codCurriculo);

      $dados['curriculo'] = $curriculo;
      $dados['candidato'] = $candidato;

      return view('curriculo.view', $dados);
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
    $adicionalController      = new AdicionalController;
    $cargoCurriculoController = new CargoCurriculoController;

    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

    $curriculo = Curriculo::create([
      'videoCurriculo'     => $request->input('videoCandidato'),
      'descricaoCurriculo' => $request->input('descricaoCurriculo'),
      'codCandidato'       => $candidato->codCandidato,
    ]);

    foreach ($request->habilidades as $key) {
      $adicionalController->novoAdicionalCurriculo($key, $curriculo->codCurriculo);
    }

    foreach ($request->categorias as $key) {
      $cargoCurriculoController->novoCargoCurriculo($key, $curriculo->codCurriculo);
    }
    return redirect('/vagas');
  }

  public function viewEditar(){
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
      'alfabetizacoes' => $niveisAlfabetizacao,
      'curriculo'      => $curriculo
    ];

    //Habilidades
    $habilidadesCandidato = $habilidadeController->getHabilidadesByCurriculo($curriculo->codCurriculo);
    $candidato->habilidades = [];
    foreach ( $habilidadesCandidato as $habilidade ) {
      $candidato->habilidades[] = $habilidade->codAdicional;
    }

    dd($habilidadesCandidato);

    //Categorias
    $candidato->categorias = $categoriaController->getCategoriasByCurriculo($curriculo->codCurriculo);

    //Escolaridade
    $curriculo->escolaridade = $adicionalController->getAdicionalByNomeTipoAndCurriculo('Escolaridade', $curriculo->codCurriculo);

    //Alfabetização
    $curriculo->alfabetizacao = $adicionalController->getAdicionalByNomeTipoAndCurriculo('Alfabetização', $curriculo->codCurriculo);

    $dados['curriculo'] = $curriculo;
    $dados['candidato'] = $candidato;

    return view('curriculo.curriculo', $dados);
  }

  /**
    * Função para editar o currículo
    *
    * @param $request dados do formulário
    *
    * @author Vanessa Amaral Marques
    **/
  public function atualizarCurriculo(Request $request){
    $adicionalController      = new AdicionalController;
    $cargoCurriculoController = new CargoCurriculoController;
    $tipoAdicionalController  = new TipoAdicionalController;

    $usuario   = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
    
    DB::table('tbCurriculo')
    ->where('codCandidato', $candidato->codCandidato)
    ->update([
      'descricaoCurriculo' => $request->input('descricaoCurriculo')
    ]);

    $curriculo = $this->getCurriculobyCandidato($candidato->codCandidato);

    //atualizando habilidades
    $codHabilidade = $tipoAdicionalController->getTipoAdicionalByNome('Habilidade')->codTipoAdicional;
    $adicionalController->removerAdicionalCurriculo($codHabilidade, $curriculo->codCurriculo);
    foreach ($request->habilidades as $habilidade) {
      $adicionalController->novoAdicionalCurriculo($habilidade, $curriculo->codCurriculo);
    }

    //atualizando categorias
    $cargoCurriculoController->removerCargoByCurriculo($curriculo->codCurriculo);
    foreach ($request->categorias as $categoria) {
      $cargoCurriculoController->novoCargoCurriculo($categoria, $curriculo->codCurriculo);
    }
  }

  public function getCurriculobyCandidato(int $codCandidato){
    return DB::table('tbCurriculo')
    ->where('codCandidato', $codCandidato)
    ->first();
  }
}
