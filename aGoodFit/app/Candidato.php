<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'tbCandidato';

    protected $fillable =
    ['nomeCandidato', 'cpfCandidato', 'rgCandidato', 'dataNascimentoCandidato', 'descricaoCandidato', 'codUsuario'];

    public function Usuario(){
    	return $this->hasOne(Usuario::class, 'codCandidato', 'codUsuario');
    }
}
