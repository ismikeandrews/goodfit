<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VagaController extends Controller
{
    public function viewVagas(){
        $vagas = DB::table('tbVaga')
            ->select('tbVaga.codVaga', 'tbVaga.descricaoVaga', 'tbVaga.cargaHorariaVaga', 'tbVaga.quantidadeVaga', 'tbProfissao.nomeProfissao', 'tbCategoria.nomeCategoria', 'tbCategoria.imagemCategoria', 'tbEndereco.cepEndereco', 'tbEndereco.logradouroEndereco', 'tbEndereco.numeroEndereco', 'tbEndereco.logradouroEndereco', 'tbEndereco.numeroEndereco', 'tbEndereco.complementoEndereco', 'tbRegimeContratacao.nomeRegimeContratacao')
            ->join('tbProfissao', 'tbVaga.codCargo', '=', 'tbProfissao.codProfissao')
            ->join('tbCategoria', 'tbProfissao.codCategoria', '=', 'tbCategoria.codCategoria')
            ->join('tbEndereco', 'tbVaga.codEndereco', '=', 'tbEndereco.codEndereco')
            ->join('tbRegimeContratacao', 'tbVaga.codRegimeContratacao', '=', 'tbRegimeContratacao.codRegimeContratacao')
            ->orderBy('tbProfissao.nomeProfissao', 'ASC')
            ->get();   
    }
}
