<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  protected $table = 'tbCurso';

  protected $fillable = ['nomeCurso', 'descricaoDescricao', 'codAdministrador'];

  public function Administrador(){
    return $this->hasMany(Administrador::class, 'codAdministrador', 'codCurso');
  }
}
