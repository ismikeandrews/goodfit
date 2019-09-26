<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    protected $table = 'tbCurriculo';

    protected $primaryKey = 'codCurriculo';

    protected $fillable = 
    ['videoCurriculo', 'codObjetivoProfissional', 'codCandidato'];

    public function ObjetivoProfissional(){
    	return $this->hasOne(Profissao::class, 'codCurriculo', 'codObjetivoProfissional');
    }

    public function Candidato(){
    	return $this->hasOne(Candidato::class, 'codCurriculo', 'codCandidato');
    }
}
