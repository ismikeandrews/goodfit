<?php
namespace App\Services;

use App\Http\Controllers\Auth\RegisterController;
use App\Candidato

class UsuarioService
{
  if (condition) {
    // code...
  }
  public function novoCandidato(RegisterController $infos){

    // dd($request->all());
    $this->validate($infos, [
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
      'descricaoCandidato' => $request->input('descricao'),
      'codUsuario' => Auth::user()->codUsuario
    ]);
  }
}
