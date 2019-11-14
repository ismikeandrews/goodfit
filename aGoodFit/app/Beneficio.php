<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
   protected $table = "tbBeneficio";
   protected $primaryKey = 'codBeneficio';
   protected $fillable = ["nomeBeneficio", "codVaga"];

    public function Vaga(){
        return $this->hasOne(Vaga::class, 'codVaga', 'codVaga');
    }
}
