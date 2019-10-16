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

        $vagas = DB::table('tbVaga')
            ->select(
                'tbVaga.codVaga',
                'tbVaga.descricaoVaga',
                'tbVaga.cargaHorariaVaga',
                'tbVaga.quantidadeVaga',
                'tbProfissao.nomeProfissao',
                'tbCategoria.nomeCategoria',
                'tbCategoria.imagemCategoria',
                'tbEndereco.cepEndereco',
                'tbEndereco.logradouroEndereco',
                'tbEndereco.numeroEndereco',
                'tbEndereco.complementoEndereco',
                'tbRegimeContratacao.nomeRegimeContratacao',
                'tbEmpresa.nomeFantasiaEmpresa'
            )
            ->join(
                'tbProfissao',
                'tbVaga.codProfissao', '=', 'tbProfissao.codProfissao')
            ->join(
                'tbCategoria',
                'tbProfissao.codCategoria', '=', 'tbCategoria.codCategoria')
            ->join(
                'tbEndereco',
                'tbVaga.codEndereco', '=', 'tbEndereco.codEndereco')
            ->join(
                'tbRegimeContratacao',
                'tbVaga.codRegimeContratacao', '=', 'tbRegimeContratacao.codRegimeContratacao')
            ->join(
                'tbEmpresa',
                'tbVaga.codEmpresa', '=', 'tbEmpresa.codEmpresa')
            ->orderBy('tbProfissao.nomeProfissao', 'ASC')
            ->get();

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

        return view('vagas', $dados)->with('usuario', $usuario);
    }
}
