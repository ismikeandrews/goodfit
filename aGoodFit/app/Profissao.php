<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class Profissao extends Model
{
    protected $table 	  = 'tbProfissao';
    protected $primaryKey = 'codProfissao';
    protected $fillable   = ['nomeProfissao', 'codCategoria'];

    public function Categoria(){
      return $this->hasMany(Categoria::class, 'codCategoria', 'codCategoria');
    }
}
