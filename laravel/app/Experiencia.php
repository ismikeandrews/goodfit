<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
  protected $table = 'tbExperienciaProfissional';

  protected $fillable = ['empresaExperienciaProfissional', 'anoInicioExperienciaProfissional', 'anoFimExperienciaProfissional', 'cargoExperienciaProfissional', 'descricaoExperienciaProfissional', 'codCurriculo'];

  public function Curriculo(){
    return $this->hasMany(Curriculo::class 'codCurriculo', 'codExperienciaProfissional');
  }
}
