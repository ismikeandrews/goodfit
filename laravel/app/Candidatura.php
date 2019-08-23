<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidatura extends Model
{
  protected $table = 'tbCandidatura';

  protected $fillable = ['dataCandidatura', 'statusCandidatura', 'codVaga', 'codCandidato'];

  public function Vaga(){
    return $this->hasOne(Vaga::class, 'codVaga', 'codCandidatura');
  }

  public function Candidato(){
    return $this->hasOne(Candidato::class, 'codCandidato', 'codCandidatura');
  }
}
