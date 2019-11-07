@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<h1>cadastro de vagas</h1>
<hr>
<form action="/vagas/cadastro" method="post">
  @csrf
  <label for="desc">Descricao da vaga</label>
  <br>
  <textarea name="desc" id="desc"></textarea>
  <br>
  <br>
  <input type="text" name="salario" placeholder="salario">
  <br>
  <br>
  <input type="text" name="cargaHoraria" placeholder="carga horaria">
  <br>
  <br>
  <input type="text" name="quantidadeVaga" placeholder="quantidade de vagas">
  <br>
  <br>
  <label for="profissao">profissao</label>
  <br>
  <select name="profissao">
    @foreach($profissao as $key)
      <option value="{{$key->codProfissao}}">
        {{ $key->nomeProfissao }}
      </option>
    @endforeach
  </select>
  <br>
  <br>
  <label for="empresa">Empresa</label>
  <br>
  <select name="empresa">
    @foreach($empresa as $key)
      <option value="{{$key->codEmpresa}}">
        {{ $key->nomeFantasiaEmpresa }}
      </option>
    @endforeach
  </select>
  <br>
  <br>
  <label for="regimeContratacao">Regime Contratação</label>
  <br>
  <select name="empresa">
    @foreach($regimeContratacao as $key)
      <option value="{{$key->codRegimeContratacao}}">
        {{ $key->nomeRegimeContratacao }}
      </option>
    @endforeach
  </select>
  <br>
  <br>
  <input type="submit" value="Enviar">
</form>
@endsection
