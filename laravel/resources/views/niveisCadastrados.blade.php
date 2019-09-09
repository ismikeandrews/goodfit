@extends('layouts.crud')

@section('conteudo')
<?php $page = 'niveis'?>
<div class="container">
  <h2 class="mt-5">Niveis Cadastrados</h2>
  <hr>
  @if(isset($ok) && $ok)
  <div class="alert alert-success text-center mt-4" role="alert">
    Nivel apagado com sucesso 😱
  </div>
  @endif
  <table class="table table-striped table-dark mt-4">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Titulo</th>
        <th scope="col">Descrição</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach($niveis as $nivel)
      <tr>
        <td>{{ $nivel->codNivelUsuario }}</th>
        <td>{{ $nivel->nomeNivelUsuario }}</td>
        <td>{{ $nivel->descricaoNivelUsuario }}</td>
        <td><a href="/niveis/deletar/{{ $nivel->codNivelUsuario }}" class="badge badge-danger"><i class="far fa-trash-alt" style="font-size:25px;"></i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
