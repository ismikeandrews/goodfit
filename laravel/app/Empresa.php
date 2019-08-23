<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  protected $table = 'tbEmpresa';

  protected $fillable = ['razaoSocialEmpresa', 'nomeFantasiaEmpresa', 'cnpjEmpresa', 'codUsuario'];

  public function Usuario(){
    return $this->hasOne(Usuario::class, 'codUsuario', 'codEmpresa');
  }
}
