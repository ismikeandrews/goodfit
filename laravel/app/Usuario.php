<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $guard = 'usuario';
    protected $table = 'tbUsuario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'loginUsuario','senhaUsuario', 'emailUsuario', 'codNivelUsuario', 'codEndereco'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'senhaUsuario', 'remember_token',
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

    public function endereco(){
      return $this->hasOne(Endereco::class, 'codUsuario', 'codEndereco');
    }
}
