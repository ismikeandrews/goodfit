<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'loginUsuario', 'senhaUsuario', 'emailUsuario', 'codNivelUsuario', 'codEndereco'
  ];

  public function nivelUsuario(){
    return $this->hasOne(NivelUsuario::class, 'codNivelUsuario', 'codUsuario');
  }

  public function Endereco(){
    return $this->hasOne(Endereco::class, 'codEndereco', 'codUsuario');
  }

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'senhaUsuario', 'remember_token',
  ];
}
