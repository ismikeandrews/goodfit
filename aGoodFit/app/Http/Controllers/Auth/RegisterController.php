<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Image;

define('MODERADOR', 1);
define('CANDIDATO', 2);
define('EMPRESA', 3);
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
     * Pra onde redirecionar após o cadastro
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
      * Função para validar os campos de usuario
      *
      * @param array  $data
      *
      * @return \Illuminate\Contracts\Validation\Validator
      *
      * @author Michael Andrews
      **/

     protected function validator(array $data)
     {
          return Validator::make($data, [
            'foto' => ['image', 'file'],
            'nome' => ['required'],
            'cpf' => ['required', 'between:14,14', 'unique:tbCandidato,cpfCandidato'],
            'rg' => ['required', 'unique:tbCandidato,rgCandidato'],
            'nascimento' => ['required', 'before:2003-10-14', 'date_format:d/m/Y'],

            'login' => ['required', 'alpha_dash', 'string', 'max:50', 'unique:tbUsuario,loginUsuario'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tbUsuario,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'codNivelUsuario' => ['required', 'string'],

            'cep' => ['required', 'between:8,8', 'string'],
            'logradouro' => ['required', 'max:250', 'string'],
            'bairro' => ['required', 'max:50', 'string'],
            'cidade' => ['required', 'max:100', 'string'],
            'estado' => ['required', 'max:50', 'string'],
            'zona' => ['required', 'max:50', 'string'],
            'numero' => ['required', 'max:5', 'string'],
            'complemento' => ['required', 'string'],
         ]);
     }

     /**
       * Função para criar um usuario
       *
       * @param array  $data
       *
       * @return $usuario
       *
       * @author Michael Andrews
       **/
     public function create(array $data)
     {
          $candidatoController = new CandidatoController;
          $enderecoController  = new EnderecoController;

         if (Arr::has($data, 'foto')) {
           $foto = $data['foto'];
           $nomeFoto = time() . '.' . $foto->getClientOriginalExtension();
           Image::make($foto)
           ->orientate()
           ->fit(300, 300)
           ->save(public_path('/images/candidatos/'.$nomeFoto));
         }
         else {
           $nomeFoto = 'perfil.png';
         }
         $codEndereco = $enderecoController->novoEndereço($data);

         $usuario = User::create([
           'loginUsuario' => $data['login'],
           'email' => $data['email'],
           'fotoUsuario' => $nomeFoto,
           'codEndereco' => $codEndereco,
           'codNivelUsuario' => $data['codNivelUsuario'],
           'password' => Hash::make($data['password']),
         ]);

         if($usuario->codNivelUsuario = CANDIDATO){
           $usuarioCandidato = $candidatoController->novoCandidato($data, $usuario->codUsuario);
         }

         return $usuario;
    }
}
