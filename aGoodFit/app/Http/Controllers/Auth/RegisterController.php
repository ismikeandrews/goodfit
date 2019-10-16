<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Image;
use App\Candidato;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/curriculo/formulario';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
     protected function validator(array $data)
     {
         return Validator::make($data, [
           'login' => ['required', 'string', 'max:255', 'unique:tbUsuario,loginUsuario'],
           'email' => ['required', 'string', 'email', 'max:255', 'unique:tbUsuario,email'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],
           'nome' => ['required'],
           'cpf' => ['required', 'min:11', 'max:11', 'unique:tbCandidato,cpfCandidato'],
           'rg' => ['required', 'unique:tbCandidato,rgCandidato'],
           'nascimento' => ['required', 'before:2003-10-14', 'date'],
           'foto' => ['image', 'file']
         ]);
     }

     /**
      * Create a new user instance after a valid registration.
      *
      * @param  array  $data
      * @return \App\User
      */
     public function create(array $data)
     {
         if (Arr::has($data, 'foto')) {
           $foto = $data['foto'];
           $nomeFoto = time() . '.' . $foto->getClientOriginalExtension();
           Image::make($foto)->resize(300, 300)->save(public_path('/images/candidatos/'.$nomeFoto));
         }
         else {
           $nomeFoto = 'perfil.png';
         }

         $usuario = User::create([
           'loginUsuario' => $data['login'],
           'email' => $data['email'],
           'fotoUsuario' => $nomeFoto,
           'codNivelUsuario' => $data['codNivelUsuario'],
           'password' => Hash::make($data['password']),
         ]);

         if($usuario->codNivelUsuario = 2){
          Candidato::create([
            'nomeCandidato' => $data['nome'],
            'cpfCandidato' => $data['cpf'],
            'rgCandidato' => $data['rg'],
            'dataNascimentoCandidato' => $data['nascimento'],
            'codUsuario' => $usuario->codUsuario
          ]);
         }
         
         return $usuario;
    }
}
