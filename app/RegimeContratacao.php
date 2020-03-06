<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegimeContratacao extends Model
{
    protected $table      = 'tbRegimeContratacao';
    protected $primaryKey = 'codRegimeContratacao';
    protected $fillable   = ['codRegimeContratacao', 'nomeRegimeContratacao'];
}
