<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
  protected $table = "tbMensagem";

  protected $fillable = ['textoMensagem', 'dataEnvio', 'codRemetente', 'codDestinatario'];
}
