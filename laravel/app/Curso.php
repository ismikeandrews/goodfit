<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  protected $table = "tbCurso";

  protected $fillable = ['nomeCurso', 'descricaoCurso', 'codAdministrador'];
}
