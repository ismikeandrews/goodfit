@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<div class="container-cadastro-vaga">
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
    <input type="text" name="beneficio" placeholder="beneficio">
    <br>
    <br>
    <input type="text" name="quantidadeVaga" placeholder="quantidade de vagas">
    <br>
    <br>
    <input type="text" id="cep" name="cep" value="{{ old('cep') }}" data-mask="00000-000" placeholder="cep"  autocomplete="cep" autofocus>
    <br>
    <br>
    <input type="text" id="logradouro"  name="logradouro" value="{{ old('logradouro') }}" placeholder="logradouro"  autocomplete="logradouro" autofocus>
    <br>
    <br>
    <input type="text" id="bairro"  name="bairro" value="{{ old('bairro') }}" placeholder="bairro"  autocomplete="bairro" autofocus>
    <br>
    <br>
    <input type="text" id="cidade" name="cidade" value="{{ old('cidade') }}" placeholder="cidade"  autocomplete="cidade" autofocus>
    <br>
    <br>
    <input type="text" id="estado" name="estado" value="{{ old('estado') }}" placeholder="estado"  autocomplete="estado" autofocus>
    <br>
    <br>
    <input type="text" id="zona" name="zona" value="{{ old('zona') }}" placeholder="zona"  autocomplete="zona" autofocus>
    <br>
    <br>
    <input type="text" id="numero" name="numero" value="{{ old('numero') }}" placeholder="numero"  autocomplete="numero" autofocus>
    <br>
    <br>
    <input type="text" id="complemento" name="complemento" value="{{ old('complemento') }}" placeholder="complemento"  autocomplete="complemento" autofocus>
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
</div>
@endsection
