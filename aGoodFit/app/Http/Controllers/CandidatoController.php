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
    return view('auth.configPerfil')
    ->with('candidato', $candidato)
    ->with('usuario', $usuario);
  }

  public function atualizarFoto(){

  }

  public function atualizarPerfil(Request $request){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

    $cpf = $request->cpf;
	  $regex = '/[^0-9]/';
	  $cpf = preg_replace($regex, '', $cpf);

    $date = $request->dataNascimentoCandidato;
	  $regex = '/[^0-9]/';
	  $data = preg_replace($regex, '-', $date);
    $parsed = date('Y-m-d', strtotime($data));



    $this->validate($request, [
      'nome' => 'string|required',
      'rg' => ['string','required', Rule::unique('tbCandidato', 'rgCandidato')->ignore($candidato->codCandidato, 'codCandidato')],
      $cpf => ['max:11', 'min:11', 'string', 'required', Rule::unique('tbCandidato', 'cpfCandidato')->ignore($candidato->codCandidato, 'codCandidato')],
      $parsed => 'date|required|before:2003-10-14',
      'foto' => 'sometimes|file|image',
      'login' => ['string','required', Rule::unique('tbUsuario', 'loginUsuario')->ignore($usuario->codUsuario, 'codUsuario')],
      'email' => ['email','required', Rule::unique('tbUsuario')->ignore($usuario->codUsuario, 'codUsuario')]
    ]);

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

    DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)
    ->update([
      'nomeCandidato' => $request->nome,
      'cpfCandidato' => $request->cpf,
      'rgCandidato' => $request->rg,
      'dataNascimentoCandidato' => $request->dataNascimentoCandidato,
      'codUsuario' => $usuario->codUsuario,
    ]);

    $usuario->loginUsuario = $request->input('login');
    $usuario->email = $request->input('email');
    $usuario->save();

    return redirect('/home');
  }
}
