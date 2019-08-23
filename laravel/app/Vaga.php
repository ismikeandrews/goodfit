<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
  protected $table = 'tbVideo';

  protected $fillable = ['descricaoVaga', 'cargoVaga', 'salarioVaga', 'cargaHorariaVaga', 'regimeContratacaoVaga', '?', 'quantidadeVaga', 'codEmpresa', 'codEndereco'];

  public function Empresa(){
    return $this->hasOne(Empresa::class, 'codEmpresa', 'codVaga');
  }

  public function Endereco(){
    return $this->hasOne(Endereco::class, 'codEndereco', 'codVaga');
  }
}
