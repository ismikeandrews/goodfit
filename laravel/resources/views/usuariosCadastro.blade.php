@extends('layouts.crud')

@section('conteudo')
<?php $page = 'usuarioCadastro'; ?>
<div class="container mt-5">
  <h2>Novo Usuario</h2>
  <hr>
  <form class="needs-validation" action="cadastro.jsp">
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
          <option value="">Administrador</option>
          <option value="">Empresa</option>
          <option value="">Candidato</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label for="confirme">Confirme a senha</label>
        <input type="password" id="confirme" name="confirme" class="form-control">
      </div>
    </div>
    <button class="btn btn-success btn-lg btn-block" type="submit">Proximo</button>
  </form>
</div>
@endsection
