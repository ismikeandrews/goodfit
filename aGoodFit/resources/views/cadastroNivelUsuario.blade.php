@extends('layouts.app')

@section('content')
<?php $page = 'cadastroNivel'; ?>

<div class="container mt-5">
  @if(isset($ok) && $ok)
  <div class="alert alert-success text-center mb-3" role="alert">
    Nivel cadastrado com sucesso 🤩
  </div>
  @endif
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Novo nivel de usuario</div>

        <div class="card-body">
          <form action="/nivelusuario/cadastro" method="POST">
            @csrf

            <div class="form-group row">
              <label for="titulo" class="col-md-4 col-form-label text-md-right">Titulo</label>

              <div class="col-md-6">
                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" required autocomplete="titulo" autofocus>

                @error('titulo')
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
        <div class="card-footer">
          <a href="/nivelusuario">Niveis cadastrados</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
