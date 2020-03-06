<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Candidato;

class Curriculo extends Model
{
    protected $table      = 'tbCurriculo';
    protected $primaryKey = 'codCurriculo';
    protected $fillable   = ['videoCurriculo', 'codCandidato'];

    public function Candidato(){
    	return $this->hasOne(Candidato::class, 'codCandidato', 'codCandidato');
    }
}
