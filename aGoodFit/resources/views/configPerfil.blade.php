@extends('layouts.app')

@section('content')
<h1>Pagina de configuracoes</h1>
<a href="/home">voltar</a>
<br>
<img src="/images/candidatos/{{$candidato->fotoCandidato}}" width="250" alt="">
<br>
<form enctype="multipart/form-data"  action="/candidato/configuracoes" method="post">
  @csrf
  <input type="file" name="foto">
  <br>
  nome
  <br>
  <input type="text" name="" value="{{$candidato->nomeCandidato}}">
  <br>
  cpf
  <br>
  <input type="text" name="" value="{{$candidato->cpfCandidato}}">
  <br>
  rg
  <br>
  <input type="text" name="" value="{{$candidato->rgCandidato}}">
  <br>
  data de nascimento
  <br>
  <input type="text" name="" value="{{$candidato->dataNascimentoCandidato}}">
  <br>
  login
  <br>
  <input type="text" name="" value="{{$usuario->loginUsuario}}">
  <br>
  email
  <br>
  <input type="text" name="" value="{{$usuario->email}}">
  <input type="submit" value="Enviar">
</form>
@endsection
