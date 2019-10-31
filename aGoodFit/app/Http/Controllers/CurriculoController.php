<?php

namespace App\Http\Controllers;

use Auth;
use App\Curriculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CurriculoController extends Controller
{

  public $adicionalController;
  public $cargoCurriculoController;
  public $categoriaController;
  public $habilidadeController;
  public $tipoAdicionalController;

  public function __construct()
  {

    //Controllers
    $this->adicionalController      = new adicionalController;
    $this->cargoCurriculoController = new CargoCurriculoController;
    $this->categoriaController      = new categoriaController;
    $this->habilidadeController     = new habilidadeController;
    $this->tipoAdicionalController  = new TipoAdicionalController;
  }
  

  public function index(){
    $usuario   = Auth::user();
    $candidato = DB::table('tbCandidato')
    ->where('codUsuario', $usuario->codUsuario)->first();

    $curriculo = DB::table('tbCurriculo')
    ->where('codCandidato', $candidato->codCandidato)->first();

    $habilidades         = $this->habilidadeController->getHabilidades();
    $categorias          = $this->categoriaController->getCategorias();
    $escolaridades       = $this->adicionalController->getAdicionalByNomeTipoAdicional('Escolaridade');
    $niveisAlfabetizacao = $this->adicionalController->getAdicionalByNomeTipoAdicional('Alfabetização');

    $dados = [
      'habilidades'    => $habilidades,
      'categorias'     => $categorias,
      'escolaridades'  => $escolaridades,
      'alfabetizacoes' => $niveisAlfabetizacao
    ];

    if ($curriculo) {
      $candidato->habilidades   = $this->habilidadeController->getHabilidadesByCurriculo($curriculo->codCurriculo);
      $candidato->categorias    = $this->categoriaController->getCategoriasByCurriculo($curriculo->codCurriculo);
      $curriculo->escolaridade  = $this->adicionalController->getAdicionalByNomeTipoAndCurriculo('Escolaridade', $curriculo->codCurriculo);

      $curriculo->alfabetizacao = $this->adicionalController->getAdicionalByNomeTipoAndCurriculo('Alfabetização', $curriculo->codCurriculo);

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
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

    $curriculo = Curriculo::create([
      'videoCurriculo'     => $request->input('videoCandidato'),
      'descricaoCurriculo' => $request->input('descricaoCurriculo'),
      'codCandidato'       => $candidato->codCandidato,
    ]);

    $this->adicionalController->novoAdicionalCurriculo($request->input('escolaridade'), $curriculo->codCurriculo);
    $this->adicionalController->novoAdicionalCurriculo($request->input('alfabetizacao'), $curriculo->codCurriculo);

    foreach ($request->habilidades as $key) {
      $this->adicionalController->novoAdicionalCurriculo($key, $curriculo->codCurriculo);
    }

    foreach ($request->categorias as $key) {
      $this->cargoCurriculoController->novoCargoCurriculo($key, $curriculo->codCurriculo);
    }
    return redirect('/vagas');
  }

  public function viewEditar(){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')
    ->where('codUsuario', $usuario->codUsuario)->first();

    $curriculo = DB::table('tbCurriculo')
    ->where('codCandidato', $candidato->codCandidato)->first();

    $habilidades         = $this->habilidadeController->getHabilidades();
    $categorias          = $this->categoriaController->getCategorias();
    $escolaridades       = $this->adicionalController->getAdicionalByNomeTipoAdicional('Escolaridade');
    $niveisAlfabetizacao = $this->adicionalController->getAdicionalByNomeTipoAdicional('Alfabetização');

    $dados = [
      'habilidades'    => $habilidades,
      'categorias'     => $categorias,
      'escolaridades'  => $escolaridades,
      'alfabetizacoes' => $niveisAlfabetizacao,
      'curriculo'      => $curriculo
    ];

    //Habilidades
    $habilidadesCandidato   = $this->habilidadeController->getHabilidadesByCurriculo($curriculo->codCurriculo);
    $candidato->habilidades = [];
    foreach ( $habilidadesCandidato as $habilidade ) {
      $candidato->habilidades[] = $habilidade->codAdicional;
    }

    $categoriasCandidato   = $this->categoriaController->getCategoriasByCurriculo($curriculo->codCurriculo);
    $candidato->categorias = [];
    foreach ( $categoriasCandidato as $categoria ) {
      $candidato->categorias[] = $categoria->codCategoria;
    }

    $curriculo->escolaridade  = $this->adicionalController->getAdicionalByNomeTipoAndCurriculo('Escolaridade', $curriculo->codCurriculo);
    $curriculo->alfabetizacao = $this->adicionalController->getAdicionalByNomeTipoAndCurriculo('Alfabetização', $curriculo->codCurriculo);

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
    $usuario   = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
    
    DB::table('tbCurriculo')
    ->where('codCandidato', $candidato->codCandidato)
    ->update([
      'descricaoCurriculo' => $request->input('descricaoCurriculo')
    ]);

    $curriculo = $this->getCurriculobyCandidato($candidato->codCandidato);

    //atualizando habilidades
    $codHabilidade = $this->tipoAdicionalController->getTipoAdicionalByNome('Habilidade')->codTipoAdicional;
    $this->adicionalController->removerAdicionalCurriculo($codHabilidade, $curriculo->codCurriculo);
    foreach ($request->habilidades as $habilidade) {
      $this->adicionalController->novoAdicionalCurriculo($habilidade, $curriculo->codCurriculo);
    }

    //atualizando categorias
    $this->cargoCurriculoController->removerCargoByCurriculo($curriculo->codCurriculo);
    foreach ($request->categorias as $categoria) {
      $this->cargoCurriculoController->novoCargoCurriculo($categoria, $curriculo->codCurriculo);
    }
  }

  public function getCurriculobyCandidato(int $codCandidato){
    return DB::table('tbCurriculo')
    ->where('codCandidato', $codCandidato)
    ->first();
  }

  public function downloadTexto(){ 
    $van = 'nessa';

    return \PDF::loadView('curriculo.curriculo-download-texto', compact('van'))
      ->stream('nome-arquivo-pdf-gerado.pdf');
  }
}
