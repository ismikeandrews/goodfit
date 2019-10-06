<?php
namespace App\Services;

use App\Http\Controllers\Auth\RegisterController;
use App\Candidato

class UsuarioService
{
  if (condition) {
    // code...
  }
  public function validarUsuario(RegisterController $usuario){
    switch ($i) {
    case 1:
    // dd($request->all());
    $this->validate($infos, [
      'nome' => 'required',
      'cpf' => 'required|min:11|max:11',
      'rg' => 'required',
      'nascimento' => 'required|date',
    ]);
    break;
    case 2:
        echo "i equals 2";
        break;
    case 3:
        echo "i equals 3";
        break;
      }

  }

  public function novoUsuario(RegisterController $infos){
    switch ($infos) {
    case 1:
    // dd($request->all());
    $candidato = Candidato::create([
      'nomeCandidato' => $request->input('nome'),
      'cpfCandidato' => $request->input('cpf'),
      'rgCandidato' => $request->input('rg'),
      'dataNascimentoCandidato' => $request->input('nascimento'),
      'descricaoCandidato' => $request->input('descricao'),
      'codUsuario' => Auth::user()->codUsuario
    ]);
    break;
    case 2:
        echo "i equals 2";
        break;
    case 3:
        echo "i equals 3";
        break;
      }
  }
}
