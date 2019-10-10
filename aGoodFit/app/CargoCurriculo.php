<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profissao;
use App\Curriculo;

class CargoCurriculo extends Model
{
  protected $table = 'tbCargoCurriculo';

  protected $fillable =
  ['codCargoCurriculo', 'codCargo', 'codCurriculo'];

  public function Cargo(){
    return $this->belongsTo(Profissao::class);
  }

  public function Curriculo(){
    return $this->belongsTo(Curriculo::class);
  }
}
