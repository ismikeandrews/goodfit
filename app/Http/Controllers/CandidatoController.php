<?php
namespace App\Http\Controllers;

use Auth;
use File;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Image;
use App\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class CandidatoController extends UsuarioController {
  public function login(){
    if (Auth::check()) {
      return redirect('/home');
    }else {
      return view('auth.login');
    }
  }

  public function index(){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
    $candidato->dataNascimentoCandidato = date('d/m/Y', strtotime($candidato->dataNascimentoCandidato));

    return response()->json([$candidato, $usuario], 200);
  }

  /**
  * Função para atualizar do perfil
  *
  * @param Request $request dados do formulário
  * @return JsonResponse
  * @throws ValidationException
  * @author Michael Andrews
  * @author Vanessa Amaral Marques
  */
  public function atualizarPerfil(Request $request){
    $usuario   = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
    $novaFoto  = null;

    //Validacao dos parametros
    $this->validate($request, [
      'nome'                    => 'string|required',
      'rg'                      => ['string','required', Rule::unique('tbCandidato', 'rgCandidato')->ignore($candidato->codCandidato, 'codCandidato')],
      'cpf'                     => ['between:14,14', 'string', 'required', Rule::unique('tbCandidato', 'cpfCandidato')->ignore($candidato->codCandidato, 'codCandidato')],
      'foto'                    => 'sometimes|file|image|mimes:jpeg,png|max:10000',
      'dataNascimentoCandidato' => 'required|before:2003-10-14|date_format:d/m/Y',
      'login'                   => ['string','required', Rule::unique('tbUsuario', 'loginUsuario')->ignore($usuario->codUsuario, 'codUsuario')],
      'email'                   => ['email','required', Rule::unique('tbUsuario')->ignore($usuario->codUsuario, 'codUsuario')]
    ]);

    if ($request->hasFile("foto")){
      $novaFoto = $request->foto;
    }

    //realizando o update dos dados do candidato
    DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)
    ->update([
      'nomeCandidato'           => $request->nome,
      'cpfCandidato'            => $this->validaCpf($request->cpf),
      'rgCandidato'             => $request->rg,
      'dataNascimentoCandidato' => $this->validaData($request->dataNascimentoCandidato),
      'codUsuario'              => $usuario->codUsuario,
    ]);

    return $this->atualizaUsuario($request->input('login'), $request->input('email'), $novaFoto);
  }

  public function validarCandidato(array $data){
    return Validator::make($data, [
     'nome' => ['required'],
     'cpf' => ['required', 'between:14,14', 'unique:tbCandidato,cpfCandidato'],
     'rg' => ['required', 'unique:tbCandidato,rgCandidato'],
     'nascimento' => ['required', 'before:2003-10-14', 'date_format:d/m/Y']
   ]);
  }

   /**
   * Função para cadastrar um candidato
   *
   * @param array $data array com os dados do formulario
   * @param int $codUsuario id do usuario recem cadastrado
   * @return JsonResponse
   * @author Michael Andrews
   * @author Vanessa Amaral Marques
   **/
  public function novoCandidato(array $data, int $codUsuario){
    $cpf  = $this->validaCpf($data['cpf']);
    $date = $this->validaData($data['nascimento']);

    $candidato = Candidato::create([
     'nomeCandidato'           => $data['nome'],
     'cpfCandidato'            => $cpf,
     'rgCandidato'             => $data['rg'],
     'dataNascimentoCandidato' => $date,
     'codUsuario'              => $codUsuario
   ]);

    if ( $candidato->save() ) {
        return response()->json('Usuário cadastrado com sucesso', 200);
    }

    return response()->json('Erro ao cadastrar usuário', 503);
  }

  /**
  * Função para pegar um candidato pelo codigo de usuário
  *
  * @param int $codUsuario codigo do usuario
  * @return JsonResponse
  * @author Vanessa Amaral Marques
  */
  public function getCandidatoByUsuario(int $codUsuario){
    $candidato = DB::table('tbCandidato')
    ->where('codUsuario', $codUsuario)
    ->get();

    return response()->json($candidato, 200);
  }

  /**
  * Valida um cpf
  *
  * @param string $cpf
  * @return string|string[]|null
  * @author Vanessa Amaral Marques
  **/
  private function validaCpf(string $cpf){
      return preg_replace('/[^0-9]/', '', $cpf);
  }

  /**
  * Valida uma data e retorna formatada no
  * formato americano
  *
  * @param string $data
  * @return false|string
  * @author Vanessa Amaral Marques
  **/
  private function validaData(string $data){
      $data = preg_replace('/[^0-9]/', '-', $data);
      return date('Y-m-d', strtotime($data));
  }
}
