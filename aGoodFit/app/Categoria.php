<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'tbCategoria';

    protected $fillable =
    ['nomeCategoria', 'codProfissao'];

    public function Profissao(){
    	return $this->hasMany(Profissao::class, 'codProfissao', 'codCategoria');
    }
}
