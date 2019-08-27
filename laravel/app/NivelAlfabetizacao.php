<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelAlfabetizacao extends Model
{
  protected $table = "tbAdministrador";

  protected $fillable = ['nomeAlfabetizacao', 'pontoNivelAlfabetizacao'];
}
