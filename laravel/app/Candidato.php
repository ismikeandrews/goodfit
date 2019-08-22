<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
  protected $table = 'tbCandidato';

  protected $fillable ['nomeCandidato', 'cpfCandidato', 'rgCandidato', 'dataNascimentoCandidato', 'nacionalidadeCandidato', 'codUsuario', 'codCurriculo'];

  public function Usuario(){
    return $this->hasOne(Usuario::class, 'codCandidato', 'codUsuario');
  }

  public function Curriculo(){
    return $this->hasOne(Curriculo::class, 'codCandidato', 'codCurriculo');
  }
}
