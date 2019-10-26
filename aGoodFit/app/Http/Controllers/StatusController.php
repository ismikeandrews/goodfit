<?php

namespace App\Http\Controllers;

use Auth;
use App\Candidatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
  public function index(){
    $beneficioController = new BeneficioController;
    $empresaController   = new EmpresaController;
    $profissaoController = new ProfissaoController;
    $vagaController      = new VagaController;

    $usuario   = Auth::user();

    $candidato = DB::table('tbCandidato')
    ->where('codUsuario', $usuario->codUsuario)
    ->first();

    $candidaturas = DB::table('tbCandidatura')
    ->where('codCandidato', $candidato->codCandidato)
    ->get();

    $dados = [
      'candidaturas' => $candidaturas
    ];

    if ($candidaturas->count() > 0) {
      foreach ($candidaturas as $candidatura) {
        $vagas               = $vagaController->getVagaByCod($candidatura->codVaga);
        $candidatura->status = getStatusByCod($candidatura->codStatusCandidatura);
      }

      foreach ($vagas as $vaga){
        $vaga->profissao  = $profissaoController->getProfissaoByCod($vaga->codProfissao);
        $vaga->empresa    = $empresaController->getEmpresaByCod($vaga->codEmpresa);
        $vaga->beneficios = $beneficioController->getBeneficioByVaga($vaga->codVaga);
      }

      $dados['vagas'] = $vagas;

    }

    return view('status', $dados);
  }

  /**
    * Função para criar um nova Candidatura
    *
    * @param $codVaga id da vaga selecionada
    *
    * @author Michael Andrews
    **/
  public function novoStatus($codVaga){
    $usuario = Auth::user();

    $candidato = DB::table('tbCandidato')
    ->where('codUsuario', $usuario->codUsuario)->first();

    $status = DB::table('tbStatusCandidatura')
    ->where('codStatusCandidatura', 2)->first();

    Candidatura::create([
      'codCandidato' => $candidato->codCandidato,
      'codVaga' => intval($codVaga),
      'codStatusCandidatura' => $status->codStatusCandidatura
    ]);
    return redirect('/vagas');
  }

  public function getStatusByCod(int $codStatusCandidatura){
    return DB::table('tbStatusCandidatura')
      ->select('tbStatusCandidatura.nomeStatusCandidatura')
      ->where('codStatusCandidatura', $codStatusCandidatura)
      ->get();
  }
}
