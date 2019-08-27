<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidatura extends Model
{
  protected $table = "tbCandidatura";

  protected $fillable = ['dataCandidatura', 'statusCandidatura', 'codVaga', 'codCandidato'];
}
