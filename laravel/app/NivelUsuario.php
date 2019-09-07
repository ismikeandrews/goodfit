<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelUsuario extends Model
{
  protected $table = 'tbNivelUsuario';

  protected $fillable = ['nomeNivelUsuario', 'descricaoNivelUsuario'];

  public function usuario(){
    return $this->hasMany(Usuario::class, 'codNivelUsuario', 'codUsuario');
  }
}
