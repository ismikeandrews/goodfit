<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAdicional extends Model
{
    protected $table      = 'tbTipoAdicional';
    protected $primaryKey = 'codTipoAdicional';
    protected $fillable   = ['nomeTipoAdicional', 'escalonavelTipoAdicional'];
}
