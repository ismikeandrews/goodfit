<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidade extends Model
{
  protected $table = "tbHabilidade";

  protected $fillable = ['nomeHabilidade', 'descricaoHabilidade', 'codCurriculo'];
}
