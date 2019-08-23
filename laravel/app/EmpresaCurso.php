<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaCurso extends Model
{
  protected $table = 'tbEmpresaCurso';

  protected $fillable = ['codEmpresa', 'codCurso'];

  public function Empresa(){
    return $this->hasOne(Empresa::class, 'codEmpresa', 'codEmpresaCurso');
  }

  public function Curso(){
    return $this->hasMany(Curso::class, 'codCurso', 'codEmpresaCurso');
  }
}
