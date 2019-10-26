<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;

class Candidato extends Model
{
    protected $table 	  = 'tbCandidato';
    protected $primaryKey = 'codCandidato';
    protected $fillable   =
    ['nomeCandidato', 'cpfCandidato', 'rgCandidato', 'dataNascimentoCandidato', 'descricaoCandidato', 'codUsuario'];

    public function Usuario(){
    	return $this->hasOne(Usuario::class, 'codUsuario', 'codUsuario');
    }
}
