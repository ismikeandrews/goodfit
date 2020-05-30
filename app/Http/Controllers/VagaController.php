<?php

namespace App\Http\Controllers;

use App\Vaga;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profissao;
use App\Empresa;
use App\RegimeContratacao;

class VagaController extends Controller
{
  public $enderecoController;
  public $beneficioController;

  public function __construct()
  {
      $this->enderecoController  = new EnderecoController;
      $this->beneficioController = new BeneficioController;
  }

    /**
  * Função para mostrar vagas compatíveis com candidato
  *
  *
  * @author Vanessa Amaral Marques
  **/
  public function index(){
    $beneficioController = new BeneficioController;
    $usuarioController   = new UsuarioController;

    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

    $curriculo = DB::table('tbCurriculo')->where('codCandidato', $candidato->codCandidato)->first();

    $dados = [
      'curriculo' => $curriculo,
      'usuario'   => $usuario,
      'candidato' => $candidato
    ];

    if ($curriculo) {
      $vagas = DB::select("
        SELECT
        COUNT(tbAdicionalCurriculo.codAdicional) AS 'Habilidades',
        tbVaga.codVaga,
          tbVaga.descricaoVaga,
          tbVaga.salarioVaga,
          tbVaga.cargaHorariaVaga,
          tbVaga.quantidadeVaga,
          tbEmpresa.codEmpresa,
          tbEmpresa.nomeFantasiaEmpresa,
          tbProfissao.nomeProfissao,
          tbEndereco.cepEndereco,
          tbEndereco.logradouroEndereco,
          tbEndereco.complementoEndereco,
          tbEndereco.numeroEndereco,
          tbEndereco.bairroEndereco,
          tbEndereco.zonaEndereco,
          tbEndereco.cidadeEndereco,
          tbEndereco.estadoEndereco,
          tbRegimeContratacao.nomeRegimeContratacao
        FROM tbVaga
        INNER JOIN tbEmpresa
          ON tbVaga.codEmpresa = tbEmpresa.codEmpresa
        INNER JOIN tbProfissao
          ON tbVaga.codProfissao = tbProfissao.codProfissao
        INNER JOIN tbEndereco
          ON tbVaga.codEndereco = tbEndereco.codEndereco
        INNER JOIN tbRegimeContratacao
          ON tbVaga.codRegimeContratacao = tbRegimeContratacao.codRegimeContratacao
        INNER JOIN tbRequisitoVaga
          ON tbVaga.codVaga = tbRequisitoVaga.codVaga
        INNER JOIN tbAdicionalCurriculo
          ON tbRequisitoVaga.codAdicional = tbAdicionalCurriculo.codAdicional
        INNER JOIN tbCategoria
          ON tbProfissao.codCategoria = tbCategoria.codCategoria
        INNER JOIN tbCargoCurriculo
          ON tbCategoria.codCategoria = tbCargoCurriculo.codCategoria
        WHERE tbVaga.codVaga NOT IN (
          SELECT tbCandidatura.codVaga
          FROM tbCandidatura
          WHERE tbCandidatura.codCandidato = '$candidato->codCandidato'
        )
        AND tbVaga.codVaga NOT IN (
          SELECT tbVaga.codVaga
            FROM tbVaga
            INNER JOIN tbRequisitoVaga
            ON tbVaga.codVaga = tbRequisitoVaga.codVaga
          WHERE tbRequisitoVaga.codAdicional NOT IN (
            SELECT tbAdicionalCurriculo.codAdicional
                FROM tbAdicionalCurriculo
                WHERE tbAdicionalCurriculo.codCurriculo = '$curriculo->codCurriculo'
            ) AND tbRequisitoVaga.obrigatoriedadeRequisitoVaga = 1
        ) AND tbVaga.codVaga IN (
          SELECT tbVaga.codVaga
            FROM tbVaga
            INNER JOIN tbRequisitoVaga
            ON tbVaga.codVaga = tbRequisitoVaga.codVaga
          INNER JOIN tbAdicionalCurriculo
            ON tbRequisitoVaga.codAdicional = tbAdicionalCurriculo.codAdicional
        )
        AND tbVaga.quantidadeVaga > 0
        GROUP BY
          tbVaga.codVaga,
          tbVaga.descricaoVaga,
          tbVaga.salarioVaga,
          tbVaga.cargaHorariaVaga,
          tbVaga.quantidadeVaga,
          tbEmpresa.codEmpresa,
          tbEmpresa.nomeFantasiaEmpresa,
          tbProfissao.nomeProfissao,
          tbEndereco.cepEndereco,
          tbEndereco.logradouroEndereco,
          tbEndereco.complementoEndereco,
          tbEndereco.numeroEndereco,
          tbEndereco.bairroEndereco,
          tbEndereco.zonaEndereco,
          tbEndereco.cidadeEndereco,
          tbEndereco.estadoEndereco,
          tbRegimeContratacao.nomeRegimeContratacao
        ORDER BY Habilidades DESC");

      foreach ($vagas as $vaga){
          $requisitos = DB::table('tbRequisitoVaga')
            ->select(
                'tbRequisitoVaga.obrigatoriedadeRequisitoVaga',
                'tbAdicional.imagemAdicional',
                'tbAdicional.nomeAdicional'
            )
            ->join('tbAdicional', 'tbRequisitoVaga.codAdicional',  '=', 'tbAdicional.codAdicional')
            ->where('tbRequisitoVaga.codVaga', '=', $vaga->codVaga)
            ->orderBy('tbAdicional.nomeAdicional', 'ASC')
            ->get();

          $vaga->requisitos = $requisitos;
          $vaga->usuario = $usuarioController->getUsuarioByCod($vaga->codEmpresa);
          $vaga->beneficios = $beneficioController->getBeneficioByVaga($vaga->codVaga);
      }

      $dados = [
        'vagas'     => $vagas,
        'curriculo' => $curriculo
      ];
    }

    return view('vagas', $dados);
  }

  /**
  * Função para pegar vaga por codigo
  *
  * @param $codVaga codigo da vaga
  *
  * @author Vanessa Amaral Marques
  **/
  public function getVagaByCod(int $codVaga){
    return DB::table('tbVaga')
    ->where('codVaga', $codVaga)
    ->get();
  }

  public function formularioVaga(){
    $profissao = Profissao::all();
    $empresa = Empresa::all();
    $regimeContratacao = RegimeContratacao::all();

    $dados['profissao'] = $profissao;
    $dados['empresa'] = $empresa;
    $dados['regimeContratacao'] = $regimeContratacao;

    return view("vaga.formVaga", $dados);
  }

  /**
  * Função para cadastrar uma nova vaga
  *
  * @param $request dados do formulario
  *
  * @author Michael Andrews
  **/
  public function novaVaga(Request $request){
    $this->validate($request, [
        'beneficio'      => 'required',
        'desc'           => 'required',
        'salario'        => 'required',
        'cargaHoraria'   => 'required',
        'quantidadeVaga' => 'required',
        'profissao'      => 'required',
        'empresa'        => 'required',
    ]);

    $endereco =
    [
      'cep'         => $request->input('cep'),
      'logradouro'  => $request->input('logradouro'),
      'bairro'      => $request->input('bairro'),
      'complemento' => $request->input('complemento'),
      'bairro'      => $request->input('bairro'),
      'zona'        => $request->input('zona'),
      'cidade'      => $request->input('cidade'),
      'estado'      => $request->input('estado'),
      'estado'      => $request->input('estado'),
    ];

    $codEndereco = $this->enderecoController->novoEndereco($endereco);

      $vaga = Vaga::create([
          'descricaoVaga'        => $request->input('desc'),
          'salarioVaga'          => $request->input('salario'),
          'cargaHorariaVaga'     => $request->input('cargaHoraria'),
          'quantidadeVaga'       => $request->input('quantidadeVaga'),
          'codEmpresa'           => $request->input('empresa'),
          'codProfissao'         => $request->input('profissao'),
          'codEndereco'          => $codEndereco,
          'codRegimeContratacao' => $request->input('empresa'),
      ]);

      $this->beneficioController->novoBeneficio($request->input('beneficio'), $vaga->codVaga);

     return redirect('/vagas/cadastro');
  }
}
