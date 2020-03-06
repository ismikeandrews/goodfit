<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Candidato;

class Responsavel extends Model
{
    protected $table 	  = 'tbResponsavel';
    protected $primaryKey = 'codResponsavel';
    protected $fillable   = ['nomeResponsavel', 'codCandidato'];

    public function Candidato(){
      return $this->belongsTo(Candidato::class, 'codCandidato', 'codCandidato');
    }
}
