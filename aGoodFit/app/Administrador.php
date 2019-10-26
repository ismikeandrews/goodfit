<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;

class Administrador extends Model
{
    protected $table 	  = 'tbAdministrador';
    protected $primaryKey = 'codAdministrador';
    protected $fillable   = ['nomeAdministrador', 'cpfAdministrador', 'unidadeAdministrador', 'codUsuario'];

    public function Usuario(){
      return $this->hasOne(Usuario::class, 'codUsuario', 'codUsuario');
    }
}
