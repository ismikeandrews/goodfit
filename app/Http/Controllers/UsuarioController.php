<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
  public function index(){
    return view('auth.cadastro-candidato');
  }

  /**
  * Função para pegar usuario por codigo
  *
  * @param int $codUsuario codigo da vaga
  * @return Model|Builder|object|null
  * @author Michael Andrews
  */
  public function getUsuarioByCod(int $codUsuario){
    return DB::table('tbUsuario')
    ->where('codUsuario', $codUsuario)
    ->first();
  }

  /**
  * Atualiza os dados do usuário
  *
  * @param string $login
  * @param string $email
  * @return JsonResponse
  * @author Vanessa Amaral Marques
  */
  public function atualizaUsuario(string $login, string $email, $novaFoto = null){
      $usuario = Auth::user();

      // Se houve a troca de foto
      if ( $novaFoto ) {
          if ($usuario->fotoUsuario !== 'perfil.png') {
              $foto = public_path('images/candidatos/' . $usuario->fotoUsuario);

              if (File::exists($foto)) {
                  unlink($foto);
              }
          }

          $foto = $novaFoto;
          $nome = time() . '.' . $foto->getClientOriginalExtension();

          $image = Image::make($foto);
          $image->orientate()->fit(300, 300);
          $image->save(public_path('/images/candidatos/'.$nome));
      }

      $usuario->loginUsuario = $login;
      $usuario->email        = $email;

      if ( $usuario->save() ) {
          return response()->json('Usuário atualizado com sucesso', 200);
      }

      return response()->json('Não foi possível atualizar o cadastro', 503);
  }
}
