<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaCurso extends Model
{
  protected $table = "tbEmpresaCurso";

  protected $fillable = ['codEmpresa', 'codCurso'];
}
