<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profissao;
use App\Curriculo;

class CargoCurriculo extends Model
{
  protected $table = 'tbCargoCurriculo';

  protected $fillable = ['codCategoria', 'codCurriculo'];

  public function Cargo(){
    return $this->hasOne(Profissao::class, 'codCargoCurriculo', 'codProfissao');
  }

  public function Curriculo(){
    return $this->hasOne(Curriculo::class, 'codCargoCurriculo', 'codCurriculo');
  }
}
