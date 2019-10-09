<?php
namespace App\Http\Controllers;
use App\Candidato;
use App\NivelUsuario;
use App\Usuario;
use Illuminate\Support\Facades\DB;
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
    if($request->hasFile('foto')) {
      $foto = $request->file('foto');
      $nome = time() . '.' . $foto->getClientOriginalExtension();

      Image::make($foto)->resize(300, 300)->save(public_path('/images/candidatos/'.$nome));
    }

    if ($candidato->fotoCandidato !== 'perfil.jpg') {
      $file = public_path('images/candidatos/' . $candidato->fotoCandidato);
      if (File::exists($file)) {
         unlink($file);
      }
    }

    DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->update(['fotoCandidato' => $nome]);

    return view('configPerfil')
    ->with('candidato', $candidato)
    ->with('usuario', $usuario);
  }

  //colocar no controller curriculo
  public function formularioCurriculo(){
    $habilidades = DB::table('tbAdicional')
        ->select('tbAdicional.codAdicional', 'tbAdicional.nomeAdicional', 'tbAdicional.imagemAdicional')
        ->join('tbTipoAdicional', 'tbAdicional.codTipoAdicional', '=', 'tbTipoAdicional.codTipoAdicional')
        ->where('tbTipoAdicional.nomeTipoAdicional', '=', 'Habilidade')
        ->orderBy('tbAdicional.nomeAdicional', 'ASC')
        ->get();
    $categorias = DB::table('tbCategoria')
      ->select('tbCategoria.codCategoria', 'tbCategoria.nomeCategoria', 'tbCategoria.imagemCategoria')
      ->orderBy('tbCategoria.nomeCategoria')
      ->get();
    $dados = [
      'habilidades' => $habilidades,
      'categorias'  => $categorias
    ];
    return view('curriculo.curriculo', $dados);
  }
}
