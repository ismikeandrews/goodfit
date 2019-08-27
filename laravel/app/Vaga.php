<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
  protected $table = "tbVaga";

  protected $fillable = ['descricaoVaga', 'codCargo', 'salarioVaga', 'cargaHorariaVaga', 'regimeContratacaoVaga', 'quantidadeVaga', 'codEmpresa', 'codEndereco'];
}
