<?php

namespace App\Http\Controllers;

use Auth;
use App\Candidatura;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StatusController extends Controller
{
  public function index(){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')
    ->where('codUsuario', $usuario->codUsuario)->first();
    $candidaturas = DB::table('tbCandidatura')
    ->where('codCandidato', $candidato->codCandidato)->get();
    if ($candidaturas->count() > 0) {
      foreach ($candidaturas as $candidatura) {
        $vagas = DB::table('tbVaga')
        ->where('codVaga', $candidatura->codVaga)->get();
      }

      foreach ($candidaturas as $candidatura) {
        $status = DB::table('tbStatusCandidatura')
        ->select('tbStatusCandidatura.nomeStatusCandidatura')
        ->where('codStatusCandidatura', $candidatura->codStatusCandidatura)
        ->first();
        $candidatura->status = $status;
      }
      
      foreach ($vagas as $vaga){
        $profissao = DB::table('tbProfissao')
        ->select('tbProfissao.nomeProfissao')
        ->where('tbProfissao.codProfissao', '=', $vaga->codProfissao)
        ->first();
        $vaga->profissao = $profissao;
      }

      foreach ($vagas as $vaga){
        $empresa = DB::table('tbEmpresa')
        ->select('tbEmpresa.nomeFantasiaEmpresa')
        ->where('tbEmpresa.codEmpresa', '=', $vaga->codEmpresa)
        ->first();
        $vaga->empresa = $empresa;
      }

      foreach ($vagas as $vaga){
        $beneficios = DB::table('tbBeneficio')
        ->select('tbBeneficio.nomeBeneficio')
        ->where('tbBeneficio.codVaga', '=', $vaga->codVaga)
        ->orderBy('tbBeneficio.nomeBeneficio', 'ASC')
        ->get();
        $vaga->beneficios = $beneficios;
      }

      $dados = [
        'vagas' => $vagas,
        'candidaturas' => $candidaturas
      ];

      return view('status', $dados);
    }
    return view('status')->with('candidaturas', $candidaturas);
  }

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
}
