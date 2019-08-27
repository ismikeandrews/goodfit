<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
  protected $table = "tbBeneficio";

  protected $fillable = ['nomeBeneficio', 'descricaoBeneficio', 'valorBeneficio', 'codVaga'];
}
