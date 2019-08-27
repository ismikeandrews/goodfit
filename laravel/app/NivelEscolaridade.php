<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelEscolaridade extends Model
{
  protected $table = "tbNivelEscolaridade";

  protected $fillable = ['nomeNivelEscolaridade', 'pontoNivelEscolaridade'];
}
