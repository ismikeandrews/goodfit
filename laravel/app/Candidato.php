<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
  protected $table = "tbCandidato";

  protected $fillable = ['nomeCandidato', 'cpfCandidato', 'rgCandidato', 'dataNascimentoCandidato', 'nacionalidadeCandidato', 'codUsuario', 'codCurriculo'];
}
