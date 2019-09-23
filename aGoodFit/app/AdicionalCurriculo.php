<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdicionalCurriculo extends Model
{
    protected $table = 'tbAdicionalCurriculo';

    protected $fillable = ['codAdicional', 'codCurriculo'];

    public function Adicional(){
    	return $this->hasOne(Adicional::class, 'codAdicionalCurriculo', 'codAdicional');
    }

    public function Curriculo(){
    	return $this->hasOne(Curriculo::class, 'codAdicionalCurriculo', 'codCurriculo');
    }
}
