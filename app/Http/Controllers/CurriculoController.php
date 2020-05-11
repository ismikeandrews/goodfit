<?php

namespace App\Http\Controllers;

use Auth;
use App\Curriculo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class CurriculoController extends Controller
{

  private $usuario;
  private $candidato;

  private $adicionalController;
  private $cargoCurriculoController;
  private $categoriaController;
  private $habilidadeController;
  private $tipoAdicionalController;

  public function __construct() {
    $this->usuario   = Auth::user();
    $this->candidato = DB::table('tbCandidato')->where('codUsuario', $this->usuario->codUsuario)->first();

    //Controllers
    $this->adicionalController      = new adicionalController;
    $this->cargoCurriculoController = new CargoCurriculoController;
    $this->categoriaController      = new categoriaController;
    $this->habilidadeController     = new habilidadeController;
    $this->tipoAdicionalController  = new TipoAdicionalController;
  }

  public function index(){
    $curriculo = DB::table('tbCurriculo')
    ->where('codCandidato', $this->candidato->codCandidato)->first();

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
      $this->candidato->habilidades   = $this->habilidadeController->getHabilidadesByCurriculo($curriculo->codCurriculo);
      $this->candidato->categorias    = $this->categoriaController->getCategoriasByCurriculo($curriculo->codCurriculo);
      $this->curriculo->escolaridade  = $this->adicionalController->getAdicionalByNomeTipoAndCurriculo('Escolaridade', $curriculo->codCurriculo);
      $this->curriculo->alfabetizacao = $this->adicionalController->getAdicionalByNomeTipoAndCurriculo('Alfabetização', $curriculo->codCurriculo);

      $dados['curriculo'] = $curriculo;
      $dados['candidato'] = $this->candidato;
    }

    return response()->json($dados);
  }

  /**
  * Função para cadastro do currículo
  *
  * @param Request $request dados do formulário
  * @return JsonResponse
  * @throws ValidationException
  * @author Michael Andrews
  * @author Vanessa Amaral Marques
  */
  public function novoCurriculo(Request $request){
    $this->validate($request, [
      'habilidades' => 'required|array',
      'categorias' => 'required|array',
      'descricaoCurriculo' => 'string|nullable',
    ]);

    try{
        $curriculo = Curriculo::create([
            'codCandidato' => $this->candidato->codCandidato,
        ]);

        if ( $curriculo->save() ) {
            DB::table('tbCurriculo')
                ->where('codCandidato', $this->candidato->codCandidato)
                ->update([
                    'descricaoCurriculo' => $request->input('descricaoCurriculo')
                ]);

            $this->adicionalController->novoAdicionalCurriculo($request->input('escolaridade'), $curriculo->codCurriculo);
            $this->adicionalController->novoAdicionalCurriculo($request->input('alfabetizacao'), $curriculo->codCurriculo);

            foreach ($request->habilidades as $key) {
                $this->adicionalController->novoAdicionalCurriculo($key, $curriculo->codCurriculo);
            }

            foreach ($request->categorias as $key) {
                $this->cargoCurriculoController->novoCargoCurriculo($key, $curriculo->codCurriculo);
            }

            return response()->json('Currículo cadastrado com sucesso');
        }
        throw new \Exception('Erro ao criar currículo');
    } catch (\Exception $e) {
        return response()->json($e->getMessage(), 503);
    }
  }

  public function viewEditar(){
    $curriculo = DB::table('tbCurriculo')
    ->where('codCandidato', $this->candidato->codCandidato)->first();

    $dados = [
      'habilidades'    => $this->habilidadeController->getHabilidades(),
      'categorias'     => $this->categoriaController->getCategorias(),
      'escolaridades'  => $this->adicionalController->getAdicionalByNomeTipoAdicional('Escolaridade'),
      'alfabetizacoes' => $this->adicionalController->getAdicionalByNomeTipoAdicional('Alfabetização'),
      'curriculo'      => $curriculo
    ];

    //Habilidades
    $habilidadesCandidato = $this->habilidadeController->getHabilidadesByCurriculo($curriculo->codCurriculo);
    $this->candidato->habilidades = [];
    foreach ( $habilidadesCandidato as $habilidade ) {
      $this->candidato->habilidades[] = $habilidade->codAdicional;
    }

    $categoriasCandidato = $this->categoriaController->getCategoriasByCurriculo($curriculo->codCurriculo);
    $this->candidato->categorias = [];
    foreach ( $categoriasCandidato as $categoria ) {
      $this->candidato->categorias[] = $categoria->codCategoria;
    }

    $curriculo->escolaridade  = $this->adicionalController->getAdicionalByNomeTipoAndCurriculo('Escolaridade', $curriculo->codCurriculo);
    $curriculo->alfabetizacao = $this->adicionalController->getAdicionalByNomeTipoAndCurriculo('Alfabetização', $curriculo->codCurriculo);

    $dados['curriculo'] = $curriculo;
    $dados['candidato'] = $this->candidato;

    return response()->json($dados);
  }

  /**
  * Função para editar o currículo
  *
  * @param Request $request dados do formulário
  * @return RedirectResponse|Redirector
  * @author Vanessa Amaral Marques
  */
  public function atualizarCurriculo(Request $request){
    DB::table('tbCurriculo')
    ->where('codCandidato', $this->candidato->codCandidato)
    ->update([
      'descricaoCurriculo' => $request->input('descricaoCurriculo')
    ]);

    $curriculo = $this->getCurriculobyCandidato();

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

    return response()->json();
  }

  /**
  * Retorna o currículo de um candidato
  *
  * @param int|null $codCandidato
  * @return JsonResponse
  * @author Vanessa Amaral Marques
  */
  public function getCurriculobyCandidato(int $codCandidato = null){
    if ( ! $codCandidato ) {
        $codCandidato = $this->candidato->codCandidato;
    }

    $curriculo = DB::table('tbCurriculo')
    ->where('codCandidato', $codCandidato)
    ->first();

    return response()->json($curriculo);
  }

  /**
  * Download do currículo em modo texto
  *
  * @return mixed
  * @author Michael Andrews
  * @author Vanessa Amaral Marques
  */
  public function downloadTexto(){
    $curriculo = DB::table('tbCurriculo')
    ->where('codCandidato', $this->candidato->codCandidato)->first();

    return \PDF::loadView('curriculo.curriculo-download-texto', compact('curriculo'))
      ->stream('nome-arquivo-pdf-gerado.pdf');
  }
}
