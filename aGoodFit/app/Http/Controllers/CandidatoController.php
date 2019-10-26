<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Candidato;
use App\NivelUsuario;
use App\Usuario;
use File;
use Image;
use Auth;
use Illuminate\Http\Request;

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
      'nome' => 'string|required',
      'rg' => ['string','required', Rule::unique('tbCandidato', 'rgCandidato')->ignore($candidato->codCandidato, 'codCandidato')],
      'cpf' => ['between:14,14', 'string', 'required', Rule::unique('tbCandidato', 'cpfCandidato')->ignore($candidato->codCandidato, 'codCandidato')],
      'foto' => 'sometimes|file|image',
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
      Image::make($foto)
      ->fit(300, 300)->rotate(-90)
      ->save(public_path('/images/candidatos/'.$nome));
      DB::table('tbUsuario')->where('codUsuario', $candidato->codUsuario)->update(['fotoUsuario' => $nome]);
    }
    //Tratamento do cpf
    $cpf = $request->cpf;
	  $regex = '/[^0-9]/';
	  $cpf = preg_replace($regex, '', $cpf);
    //Tratamento da data de nascimento
    $date = $request->dataNascimentoCandidato;
    $data = preg_replace($regex, '-', $date);
    $parsed = date('Y-m-d', strtotime($data));
    //realizando o update dos dados do candidato
    DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)
    ->update([
      'nomeCandidato' => $request->nome,
      'cpfCandidato' => $cpf,
      'rgCandidato' => $request->rg,
      'dataNascimentoCandidato' => $parsed,
      'codUsuario' => $usuario->codUsuario,
    ]);
    //realizando o update dos dados do usuario
    $usuario->loginUsuario = $request->input('login');
    $usuario->email = $request->input('email');
    $usuario->save();

    return redirect('/home');
  }
}
