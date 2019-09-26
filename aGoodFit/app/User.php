<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */

  protected $table = 'tbUsuario';

  protected $primaryKey = 'codUsuario';

  protected $fillable = [
    'loginUsuario', 'email', 'password', 'codNivelUsuario'
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
  * The attributes that should be cast to native types.
  *
  * @var array
  */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];
  public function nivelUsuario(){
    return $this->hasOne(NivelUsuario::class, 'codUsuario', 'codNivelUsuario');
  }
}
