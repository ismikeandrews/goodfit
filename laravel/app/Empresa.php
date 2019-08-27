<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  protected $table = "tbEmpresa";

  protected $fillable = ['razaoSocialEmpresa', 'nomeFantasiaEmpresa', 'cnpjEmpresa', 'codUsuario'];
}
