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
    return view('configPerfil')
    ->with('candidato', $candidato)
    ->with('usuario', $usuario);
  }
  public function atualizarPerfil(Request $request){

    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

    $this->validate($request, [
      'nome' => 'string|required',
      'rg' => ['max:9', 'min:9','string','required', Rule::unique('tbCandidato', 'rgCandidato')->ignore($candidato->codCandidato, 'codCandidato')],
      'cpf' => ['max:11', 'min:11', 'string', 'required', Rule::unique('tbCandidato', 'cpfCandidato')->ignore($candidato->codCandidato, 'codCandidato')],
      'dataNascimentoCandidato' => 'date|required',
      'login' => ['string','required', Rule::unique('tbUsuario', 'loginUsuario')->ignore($usuario->codUsuario, 'codUsuario')],
      'email' => ['email','required', Rule::unique('tbUsuario')->ignore($usuario->codUsuario, 'codUsuario')]
    ]);

    if ($request->hasFile("foto")) {
      if ($candidato->fotoCandidato !== 'perfil.png') {
        $foto = public_path('images/candidatos/' . $candidato->fotoCandidato);
        if (File::exists($foto)) {
           unlink($foto);
        }
      }
      $foto = $request->foto;
      $nome = time() . '.' . $foto->getClientOriginalExtension();
      Image::make($foto)->resize(300, 300)->save(public_path('/images/candidatos/'.$nome));
      DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->update(['fotoCandidato' => $nome]);
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

  public function paginaVagas(){
    $usuario = Auth::user();
    $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();
    return view('vagas')->with('candidato', $candidato);
  }
}
