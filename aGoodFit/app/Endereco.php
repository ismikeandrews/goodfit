<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
	protected $table = 'tbEndereco';

	protected $fillable =
	['cepEndereco', 'logradouroEndereco', 'numeroEndereco', 'complementoEndereco', 'bairroEndereco', 'zonaEndereco', 'cidadeEndereco', 'estadoEndereco'];
}
