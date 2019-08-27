<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
  protected $table = "tbExperienciaProfissional";

  protected $fillable = ['empresaExperienciaProfissional', 'anoInicioExperienciaProfissional', 'anoFimExperienciaProfissional', 'cargoExperienciaProfissional', 'descricaoExperienciaProfissional', 'codCurriculo'];
}
