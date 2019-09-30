<?php
namespace App\Services;

use App\Http\Controllers\Auth\RegisterController;
use App\Candidato;

class UsuarioService
{
  public function novoUsuario($usuario){
    dd($usuario->all());
    switch ($usuario->codNivelUsuario) {
    case 1:
    // dd($request->all());
    break;
    case 2:
    $this->validate($usuario, [
      'nome' => 'required',
      'cpf' => 'required|min:11|max:11',
      'rg' => 'required',
      'nascimento' => 'required|date',
    ]);

    $candidato = Candidato::create([
      'nomeCandidato' => $request->input('nome'),
      'cpfCandidato' => $request->input('cpf'),
      'rgCandidato' => $request->input('rg'),
      'dataNascimentoCandidato' => $request->input('nascimento'),
      'codUsuario' => $usuario->codUsuario
    ]);
        break;
    case 3:
        echo "i equals 3";
        break;
      }

  }
}
