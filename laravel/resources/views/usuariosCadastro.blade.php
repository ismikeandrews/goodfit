@extends('layouts.crud')

@section('conteudo')
<?php $page = 'usuarioCadastro'; ?>
<div class="container mt-5">
  <h2>Novo Usuario</h2>
  <hr>
  @if(isset($ok) && $ok)
  <div class="alert alert-success text-center" role="alert">
    Usuario cadastrado com sucesso 🤩
  </div>
  @endif
  <form class="needs-validation"  method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
    @csrf
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="email@example.com">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-12 mb-3">
        <label for="nivel">Nivel Usuario</label>
        <select class="form-control" name="nivel" id="nivel">
          <option value="">Selecione</option>
          @foreach($niveis as $nivel)
          <option value="{{ $nivel->codNivelUsuario }}">{{ $nivel->nomeNivelUsuario }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label for="password-confirm">Confirme a senha</label>
        <input type="password" id="password-confirm" name="password_confirmation" class="form-control" required autocomplete="new-password">
      </div>
    </div>
    <button class="btn btn-success btn-lg btn-block" type="submit">Proximo</button>
  </form>
</div>
@endsection
