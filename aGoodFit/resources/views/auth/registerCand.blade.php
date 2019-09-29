@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Cadastro Candidato</div>

        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <input id="codNivelUsuario" name="codNivelUsuario" type="hidden" value="{{$codNivelUsuario}}">
            <div class="form-group row">
              <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>

              <div class="col-md-6">
                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}"  autocomplete="nome" autofocus>

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
                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}"  autocomplete="cpf" autofocus>

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
                <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror" name="rg" value="{{ old('rg') }}"  autocomplete="rg" autofocus>

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
                <input id="nascimento" type="text" class="form-control @error('nascimento') is-invalid @enderror" name="nascimento" value="{{ old('nascimento') }}"  autocomplete="nascimento" autofocus>

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

                <textarea id="descricao" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{ old('descricao') }}" autocomplete="descricao" autofocus></textarea>

                @error('descricao')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="login" class="col-md-4 col-form-label text-md-right">Username</label>

              <div class="col-md-6">
                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}"  autocomplete="login" autofocus>

                @error('login')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirme a senha</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
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
