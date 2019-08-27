<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequisitoMinimo extends Model
{
  protected $table = "tbRequisitoMinimo";

  protected $fillable = ['tipoRequisitoMinimo', 'codTipoRequisitoMinimo', 'codVaga'];
}
