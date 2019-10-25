<?php

namespace App\Http\Controllers;

use Auth;
use App\Candidato;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VagaController extends Controller
{
  public function paginaVagas(){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

    $curriculo = DB::table('tbCurriculo')->where('codCandidato', $candidato->codCandidato)->first();
    if ($curriculo) {
      $vagas = DB::select("
        SELECT
        COUNT(tbAdicionalCurriculo.codAdicional) AS 'Habilidades',
        tbVaga.codVaga,
          tbVaga.descricaoVaga,
          tbVaga.salarioVaga,
          tbVaga.cargaHorariaVaga,
          tbVaga.quantidadeVaga,
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
        'vagas'     => $vagas,
        'candidato' => $candidato
      ];

      return view('vagas', $dados)->with('usuario', $usuario)->with('curriculo', $curriculo);
    }
    else {
      return view('vagas')->with('usuario', $usuario)->with('curriculo', $curriculo);
    }
  }
}
