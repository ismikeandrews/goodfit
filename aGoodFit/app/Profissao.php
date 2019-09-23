<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissao extends Model
{
    protected $table = 'tbProfissao';

    protected $fillable = ['nomeProfissao', 'codCategoria'];

    public function Categoria(){
    	return $this->hasOne(Categoria::class, 'codProfissao', 'codCategoria');
    }
}
