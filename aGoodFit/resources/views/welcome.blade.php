@extends('layouts.app')
@section('content')
<?php $page = "welcome"?>
<div class="container mt-5">
    <div class="jumbotron">
      <div class="container text-center ">
        <h1 class="display-4">Bem vindo</h1>
        <hr>
        <p class="lead">Este é um templete CRUD que faz operações basicas; Cadastro, consulta, atualização e exclusão de informações de um banco de dados.</p>

        <a class="btn btn-primary btn-lg mt-3" href="/nivelusuario/cadastro" role="button">Cadastre um nivel de usuario</a>
      </div>
    </div>
  </div>
@endsection
