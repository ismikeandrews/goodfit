<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAdicional extends Model
{
    protected $table = 'tbTipoAdicional';

    protected $fillable =
    ['nomeTipoAdicional', 'escalonavelTipoAdicional'];
}
