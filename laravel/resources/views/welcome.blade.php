@extends('layouts.crud')

@section('conteudo')
<?php $page = 'home'; ?>
  <div class="container">
    <div class="jumbotron">
      <div class="container text-center ">
        <h1 class="display-4">Bem vindo</h1>
        <hr>
        <p class="lead">Este é um templete CRUD que faz operações basicas; Cadastro, consulta, atualização e exclusão de informações de um banco de dados.</p>
        <p class="lead text-danger">Ultilize o menu de navegação acima para começar.</p>
      </div>
    </div>
  </div>
@endsection
