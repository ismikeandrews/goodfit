@extends('layouts.app')

@section('content')

<section class="container container-login">
    <div class="logo-content">
        <div class="logo">
            <img src="{{asset('images/componentes/logo.png')}}" alt="Logo - A Good Fit" class="logo-img">
        </div>
    </div>

    <div class="section">
        <div class="intro">
            <h1 class="intro-title">Seja bem-vindo a <span class="intro-title-span">Good Fit</span></h1>
            <h3 class="intro-desc">Entre para acessar a plataforma</h3>
        </div>

        <form class="form">
            <div class="form-inputs">
                <div class="form-input-email">
                  <input id="email" type="email" placeholder="Email" class="form-input-item @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>

            <div class="form-inputs">
                <div class="form-input-senha">
                    <input id="password" type="password" placeholder="Senha" class="form-input-item @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-label">
              @if (Route::has('password.request'))
              <a class="label label-senha" href="{{ route('password.request') }}">
                {{ __('Esqueceu a senha?') }}
              </a>
              @endif
            </div>

            <div>
              <button type="submit" class="btn btn-login">
                {{ __('Entrar') }}
              </button>
            </div>

            <div>
              <button type="submit" class="btn btn-cod">
                {{ __('Código de cadastro') }}
              </button>
            </div>

            <div class="form-label">
              <p class="label label-cadastrar">Não tem uma conta?</a>
            </div>

            <div>
              <button type="submit" class="btn btn-cadastrar">
                {{ __('Cadastre-se') }}
              </button>
            </div>
        </form>
    </div>
</section>

@endsection
