<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
  protected $table = 'tbMensagem';

  protected $fillable = ['textoMensagem', 'dataEnvioMensagem', 'codRemetente', 'codDestinatario'];

  public function Usuario(){
    return $this->hasMany(Usuario::class, 'codUsuario', 'codMensagem');
  }
}
