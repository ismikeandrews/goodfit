<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    protected $table = 'tbCurriculo';

    protected $primaryKey = 'codCurriculo';

    protected $fillable =
    ['videoCurriculo', 'codCandidato'];

    public function Candidato(){
    	return $this->hasOne(Candidato::class, 'codCurriculo', 'codCandidato');
    }
}
