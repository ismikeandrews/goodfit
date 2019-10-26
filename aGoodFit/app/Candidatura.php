<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidatura extends Model
{
  protected $table = 'tbCandidatura';

  protected $primaryKey = 'codCandidatura';

  protected $fillable =
  ['codCandidato', 'codVaga', 'codStatusCandidatura'];

  public function Candidato(){
    return $this->hasMany(Candidato::class, 'codCandidato', 'codCandidatura');
  }
  // public function Vaga(){
  //   return $this->hasMany(Vaga::class, 'codVaga', 'codCandidatura');
  // }
}
