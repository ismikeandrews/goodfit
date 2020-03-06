<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;

class Empresa extends Model
{
    protected $table      = 'tbEmpresa';
    protected $primaryKey = 'codEmpresa';
    protected $fillable   = ['razaoSocialEmpresa', 'nomeFantasiaEmpresa', 'cnpjEmpresa', 'codUsuario'];

    public function Usuario(){
    	return $this->hasOne(Usuario::class, 'codUsuario', 'codUsuario');
    }
}
