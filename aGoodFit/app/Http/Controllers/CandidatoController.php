<?php
namespace App\Http\Controllers;

use Auth;
use File;
use Image;
use App\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CandidatoController extends Controller
{
  public function login(){
    if (Auth::check()) {
      return redirect('/home');
    }else {
      return view('auth.login');
    }
  }
  public function config(){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
    $candidato->dataNascimentoCandidato = date('d/m/Y', strtotime($candidato->dataNascimentoCandidato));

    return view('auth.configPerfil')
    ->with('candidato', $candidato)
    ->with('usuario', $usuario);
  }

  /**
    * Função para atualizar do perfil
    *
    * @param $request dados do formulário
    *
    * @author Michael Andrews
    **/
  public function atualizarPerfil(Request $request){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

    //Validacao dos parametros
    $this->validate($request, [
      'nome'  => 'string|required',
      'rg'    => ['string','required', Rule::unique('tbCandidato', 'rgCandidato')->ignore($candidato->codCandidato, 'codCandidato')],
      'cpf'   => ['between:14,14', 'string', 'required', Rule::unique('tbCandidato', 'cpfCandidato')->ignore($candidato->codCandidato, 'codCandidato')],
      'foto'  => 'sometimes|file|image',
      'dataNascimentoCandidato' => 'required|before:2003-10-14|date_format:d/m/Y',
      'login' => ['string','required', Rule::unique('tbUsuario', 'loginUsuario')->ignore($usuario->codUsuario, 'codUsuario')],
      'email' => ['email','required', Rule::unique('tbUsuario')->ignore($usuario->codUsuario, 'codUsuario')]
    ]);

    //Tratamento da foto
    if ($request->hasFile("foto")){
      if ($usuario->fotoUsuario !== 'perfil.png') {
        $foto = public_path('images/candidatos/' . $usuario->fotoUsuario);

        if (File::exists($foto)) {
           unlink($foto);
        }
      }

      $foto = $request->foto;
      $nome = time() . '.' . $foto->getClientOriginalExtension();

      $image = Image::make($foto);
      $image->orientate()->fit(300, 300);
      $image->save(public_path('/images/candidatos/'.$nome));


      DB::table('tbUsuario')->where('codUsuario', $candidato->codUsuario)->update(['fotoUsuario' => $nome]);
    }


    //Tratamento do cpf
    $cpf   = $request->cpf;
	  $cpf   = preg_replace('/[^0-9]/', '', $cpf);

    //Tratamento da data de nascimento
    $date = $request->dataNascimentoCandidato;
    $data = preg_replace('/[^0-9]/', '-', $date);
    $parsed = date('Y-m-d', strtotime($data));

    //realizando o update dos dados do candidato
    DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)
    ->update([
      'nomeCandidato'           => $request->nome,
      'cpfCandidato'            => $cpf,
      'rgCandidato'             => $request->rg,
      'dataNascimentoCandidato' => $parsed,
      'codUsuario'              => $usuario->codUsuario,
    ]);

    //realizando o update dos dados do usuario
    $usuario->loginUsuario = $request->input('login');
    $usuario->email = $request->input('email');
    $usuario->save();

    return redirect('/home');
  }

  /**
  * Função para cadastrar um candidato
  *
  * @param array $data array com os dados do formulario
  * @param int $codUsuario id do usuario recem cadastrado
  *
  * @author Michael Andrews
  **/
  public function novoCandidato(array $data, int $codUsuario){
    $cpf = $data['cpf'];
    $regex = '/[^0-9]/';
    $cpf = preg_replace($regex, '', $cpf);

    $date = $data['nascimento'];
    $date = preg_replace($regex, '-', $date);
    $parsed = date('Y-m-d', strtotime($date));

   Candidato::create([
     'nomeCandidato' => $data['nome'],
     'cpfCandidato' => $cpf,
     'rgCandidato' => $data['rg'],
     'dataNascimentoCandidato' => $parsed,
     'codUsuario' => $codUsuario
   ]);
  }

  /**
  * Função para pegar um candidato pelo codigo de usuário
  *
  * @param $codUsuario codigo do usuario
  *
  * @author Vanessa Amaral Marques
  **/
  public function getCandidatoByUsuario(int $codUsuario){
    return DB::table('tbCandidato')
    ->where('codUsuario', $codUsuario)
    ->get();
  }
}
