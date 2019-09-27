@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header @if(isset($ok) && $ok) bg-success @endif">Cadastro de usuario @if(isset($ok) && $ok) concluida @endif</div>




        <div class="card-body">
          <form method="POST" action="/candidato/cadastro">
            @csrf

            <div class="form-group row">
              <label for="nome" class="col-md-4 col-form-label text-md-right">Nome Completo</label>

              <div class="col-md-6">
                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                @error('nome')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF</label>

              <div class="col-md-6">
                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

                @error('cpf')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="rg" class="col-md-4 col-form-label text-md-right">RG</label>

              <div class="col-md-6">
                <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror" name="rg" value="{{ old('rg') }}" required autocomplete="rg" autofocus>

                @error('rg')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="nascimento" class="col-md-4 col-form-label text-md-right">Data de Nascimento</label>

              <div class="col-md-6">
                <input id="nascimento" type="date" class="form-control @error('nascimento') is-invalid @enderror" name="nascimento" required autocomplete="nascimento">

                @error('nascimento')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="descricao" class="col-md-4 col-form-label text-md-right">Descricao</label>

              <div class="col-md-6">

                <textarea class="form-control @error('descricao') is-invalid @enderror" name="descricao" autocomplete="descricao" id="descricao"></textarea>

                @error('descricao')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Cadastrar
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
