@extends('layouts.app')

@section('content')
<?php $page = 'niveis'?>
<div class="container">
  <h2 class="mt-5">Niveis Cadastrados</h2>
  <hr>
  <a href="/nivelusuario/cadastro">Voltar a pagina de cadastro</a>
  <table class="table table-striped table-dark mt-4">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Titulo</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach($niveis as $nivel)
      <tr>
        <td>{{ $nivel->codNivelUsuario }}</td>
        <td>{{ $nivel->nomeNivelUsuario }}</td>
        <td><a href="/nivelusuario/deletar/{{ $nivel->codNivelUsuario }}" class="badge badge-danger"><i class="far fa-trash-alt" style="font-size:25px;"></i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
