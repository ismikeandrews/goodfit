@extends('layouts.app')

@section('content')

<section class="container container-cadastro">
    <div class="icon-voltar">
        <img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Voltar" class="icon-voltar-img">
    </div>

    <div class="section section-cadastro">
        <div class="intro">
            <h3 class="intro-desc">Preencha os dados cadastrais</h3>
        </div>

        <div class="cadastro-perfil">
            <div class="cadastro-perfil-img">
                <img src="{{asset('images/componentes/perfil.svg')}}" alt="Insira sua imagem de perfil" class="perfil-img">
            </div>
            <div class="cadastro-perfil-desc">
                Clique no ícone para inserir sua imagem
            </div>
        </div>

        <form class="form">
            <div class="form-legend">
                Dados Pessoais
            </div>
            <div class="form-inputs">
                <div class="form-input-email">
                  <input id="nome" type="nome" placeholder="Nome" class="form-input-item @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                  @error('nome')
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


            <div class="form-legend">
                Dados Pessoais
            </div>
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

            <div>
              <button type="submit" class="btn btn-login">
                {{ __('Entrar') }}
              </button>
            </div>

        </form>
    </div>
</section>

@endsection
