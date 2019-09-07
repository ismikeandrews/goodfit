@extends('layouts.crud')

@section('conteudo')
<?php $page = 'cadastroNivel'; ?>
<div class="container mt-5">
  <h2>Novo nivel de Usuario</h2>
  <hr>
  @if(isset($ok) && $ok)
  <div class="alert alert-success text-center" role="alert">
    Nivel cadastrado com sucesso 🤩
  </div>
  @endif
  <form action="/nivel/cadastrar" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-md-12 mb-3">
      <label for="titulo">Titulo</label>
      <input type="text" name="titulo" id="titulo" class="form-control">
    </div>
    <div class="col-md-12 mb-3">
      <label for="descricao">Descricao</label>
      <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
    </div>
    <button class="btn btn-success btn-lg btn-block" type="submit">Salvar</button>
  </form>
</div>
@endsection
