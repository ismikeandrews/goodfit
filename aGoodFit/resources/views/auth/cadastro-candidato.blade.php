@extends('layouts.app')

@section('content')

<section class="container container-cadastro">
    <div class="icon-voltar icon-voltar-cadastro">
      <a href="/">
        <img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Voltar" class="icon-voltar-img">
      </a>
    </div>

    <div class="section section-cadastro">
        <div class="cadastro-intro">
            <h3 class="intro-desc">Preencha os dados cadastrais</h3>
        </div>

        <form enctype="multipart/form-data" class="form" method="POST" action="{{ route('register') }}">
          @csrf
            <div class="cadastro-perfil">
                <div class="cadastro-perfil-img">
                    <label for='arquivo-foto'>
                        <img src="{{asset('images/componentes/perfil.svg')}}" alt="Insira sua imagem de perfil">
                    </label>
                    @error('foto')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input id='arquivo-foto' type="file" name="foto" class="perfil-img" accept=".jpg, .jpeg, .png">
                </div>
                <div class="cadastro-perfil-desc">
                    Clique no ícone para inserir sua imagem
                </div>
            </div>

            <div class="form-legend">
              Dados Pessoais
            </div>

            <input id="codNivelUsuario" name="codNivelUsuario" type="hidden" value="2">
            <div class="form-inputs">
                <div class="form-input-nome">
                  <input id="nome" type="text" placeholder="Nome" class="form-input-item @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" autocomplete="nome" autofocus>
                  @error('nome')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-email">
                  <input id="email" type="email" placeholder="E-mail" class="form-input-item @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
            </div>
            <div class="form-inputs">
                <div class="form-input-telefone">
                    <input id="login" type="text" placeholder="Apelido" class="form-input-item @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                    @error('login')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-data-nascimento">
                  <input id="data-nascimento" type="date" placeholder="dd/mm/AAAA" class="form-input-item @error('nascimento') is-invalid @enderror" name="nascimento" value="{{ old('nascimento') }}" autocomplete="data-nascimento" autofocus>
                  @error('nascimento')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-rg">
                  <input id="rg" type="text" placeholder="RG" class="form-input-item @error('rg') is-invalid @enderror" name="rg" value="{{ old('rg') }}" autocomplete="rg" autofocus>
                  @error('rg')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-cpf">
                  <input id="cpf" type="text" placeholder="CPF" class="form-input-item @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" autocomplete="cpf" autofocus>
                  @error('cpf')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
            </div>


            <div class="form-legend">
                Senha
            </div>
            <div class="form-inputs">
                <div class="form-input-senha">
                    <input id="senha" type="password" placeholder="Senha" class="form-input-item @error('password') is-invalid @enderror" name="password" required autocomplete="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-inputs">
                <div class="form-input-confirmar-senha">
                    <input id="confirmar-senha" type="password" placeholder="Confirmar senha" class="form-input-item" name="password_confirmation" required autocomplete="password_confirmation">
                </div>
            </div>

            <div>
              <button type="submit" class="btn btn-login btn-cadastro">
                Entrar
              </button>
            </div>

        </form>
    </div>
</section>

@endsection
