<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $table = "tbUsuario";

  protected $fillable = ['loginUsuario', 'senhaUsuario', 'emailUsuario', 'codNivelUsuario', 'codEndereco'];
}
