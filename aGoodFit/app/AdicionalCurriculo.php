<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Adicional;
use App\Curriculo;

class AdicionalCurriculo extends Model
{
    protected $table 	  = 'tbAdicionalCurriculo';
    protected $primaryKey = 'codAdicionalCurriculo';
    protected $fillable   = ['codAdicional', 'codCurriculo'];

    public function Adicional(){
    	return $this->hasOne(Adicional::class, 'codAdicional', 'codAdicional');
    }

    public function Curriculo(){
    	return $this->hasOne(Curriculo::class, 'codCurriculo', 'codCurriculo');
    }
}
