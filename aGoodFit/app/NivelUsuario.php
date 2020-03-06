<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelUsuario extends Model
{
  protected $table 	    = 'tbNivelUsuario';
  protected $primaryKey = 'codNivelUsuario';
  protected $fillable   = ['nomeNivelUsuario'];
}
