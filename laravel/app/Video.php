<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  protected $table = 'tbVideo';

  protected $fillable = ['nomeVideo', 'duracaoVideo', 'caminhoVideo', 'codCurso'];

  public function Curso(){
    return $this->belongsTo(Curso::class, 'codCurso', 'codVideo');
  }
}
