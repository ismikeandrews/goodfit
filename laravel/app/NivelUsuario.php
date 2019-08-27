<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelUsuario extends Model
{
  protected $table = "tbNivelUsuario";

  protected $fillable = ['nomeNivelusuario', 'descricaoNivelUsuario'];
}
