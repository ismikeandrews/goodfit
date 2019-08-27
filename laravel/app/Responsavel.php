<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
  protected $table = "tbResponsavel";

  protected $fillable = ['nomeResponsavel', 'emailResponsavel', 'codCandidato', 'codUsuario'];
}
