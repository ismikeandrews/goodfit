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
    $usuarioController   = new UsuarioController;
    $vagaController      = new VagaController;

    $usuario   = Auth::user();

    $candidato = DB::table('tbCandidato')
    ->where('codUsuario', $usuario->codUsuario)
    ->first();

    $curriculo = DB::table('tbCurriculo')
    ->where('codCandidato', $candidato->codCandidato)
    ->first();

    $candidaturas = DB::table('tbCandidatura')
    ->where('codCandidato', $candidato->codCandidato)
    ->get();

    if ($candidaturas->count() > 0) {
      foreach ($candidaturas as $candidatura) {
        $candidatura->vaga  = $vagaController->getVagaByCod($candidatura->codVaga);
        $candidatura->status = $this->getStatusByCod($candidatura->codStatusCandidatura);
        foreach ($candidatura->vaga as $vaga){
          $vaga->profissao  = $profissaoController->getProfissaoByCod($vaga->codProfissao);
          $vaga->empresa    = $empresaController->getEmpresaByCod($vaga->codEmpresa);
          $vaga->beneficios = $beneficioController->getBeneficioByVaga($vaga->codVaga);
          $vaga->usuario    = $usuarioController->getUsuarioByCod($vaga->codVaga);

        }
      }
    }

    $dados = [
      'candidaturas' => $candidaturas,
      'curriculo' => $curriculo,
    ];
    return view('status', $dados);
  }

  /**
    * Função para pegar o status de uma candidatura
    *
    * @param $codStatusCandidatura codigo do status da candidatura
    *
    * @author Vanessa Amaral Marques
    **/
  public function getStatusByCod(int $codStatusCandidatura){
    return DB::table('tbStatusCandidatura')
      ->select('tbStatusCandidatura.nomeStatusCandidatura', 'tbStatusCandidatura.codStatusCandidatura')
      ->where('codStatusCandidatura', $codStatusCandidatura)
      ->first();
  }
}
