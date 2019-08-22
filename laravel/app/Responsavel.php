<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
  protected $table = 'tbResponsavel';

  protected $fillable = ['nomeResponsavel', 'emailResponsavel', 'codCandidato', 'codUsuario'];

  public function Candidato(){
    return $this->hasMany(Candidato::class 'codCandidato', 'codResponsavel');
  }
}
