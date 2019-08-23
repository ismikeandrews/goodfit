<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
  protected $table = 'tbAdministrador';

  protected $fillable = ['unidadeAdministrador', 'codUsuario'];

  public function Usuario(){
    return $this->hasOne(Usuario::class, 'codUsuario', 'codAdministrador');
  }
}
