<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
  protected $table = 'tbEndereco';

  protected $fillable = ['lougradouroEndereco', 'numeroEndereco', 'complementoEndereco', 'cepEndereco', 'bairroEndereco', 'zonaEndereco', 'cidadeEndereco', 'estadoEndereco'];
}
