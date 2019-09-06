<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $table = 'tbUsuario';

  protected $fillable = ['loginUsuario','senhaUsuario', 'emailUsuario', 'codNivelUsuario', 'codEndereco'];

  public function nivelUsuario(){
    return $this->hasOne(NivelUsuario::class, 'codUsuario', 'codNivelUsuario');
  }

  public fucntion endereco(){
    return $this->hasOne(Endereco::class, 'codUsuario', 'codEndereco');
  }
}
