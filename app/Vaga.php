<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profissao;
use App\Empresa;
use App\Endereco;
use App\RegimeContratacao;

class Vaga extends Model
{
    protected $table      = 'tbVaga';
    protected $primaryKey = 'codVaga';
    protected $fillable   = ['descricaoVaga', 'salarioVaga', 'cargaHorariaVaga', 'quantidadeVaga', 'codProfissao', 'codEmpresa', 'codEndereco', 'codRegimeContratacao'];

    public function Profissao(){
    	return $this->hasOne(Profissao::class, 'codProfissao', 'codProfissao');
    }

    public function Empresa(){
    	return $this->hasOne(Empresa::class, 'codEmpresa', 'codEmpresa');
    }

    public function Endereco(){
    	return $this->hasOne(Endereco::class, 'codEndereco', 'codEndereco');
    }

    public function RegimeContratacao(){
    	return $this->hasOne(RegimeContratacao::class, 'codRegimeContratacao', 'codRegimeContratacao');
    }
}
