<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
  protected $table = "tbCurriculo";

  protected $fillable = ['codObjetivoProfissional', 'codNivelAlfabetizacao', 'codNivelEscolaridade'];
}
