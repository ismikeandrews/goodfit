<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adicional extends Model
{
    protected $table	  = 'tbAdicional';
    protected $primaryKey = 'codAdicional';
    protected $fillable   = ['nomeAdicional', 'grauAdicional', 'codTipoAdicional'];

    public function TipoAdicional(){
    	return $this->hasOne(TipoAdicional::class, 'codAdicional', 'codAdicional');
    }
}
