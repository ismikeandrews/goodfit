@extends('layouts.app')

@section('content')

<section class="container container-cadastro">
  <div class="etapas etapas-cadastro">
    <form enctype="multipart/form-data" class="form" method="POST" action="{{ route('register') }}">
      @csrf
      <div class="counter-etapas-content is-active">
        @include('auth.cadastro.etapa1')
      </div>
      <div class="counter-etapas-content">
        @include('auth.cadastro.etapa2')
      </div>

      <div class="counter">
        <div class="counter-etapas">
            <div class="counter-etapas-etapa">
                <p class="counter-etapas-etapa-1">
                    1
                </p>
            </div>
            <div class="counter-etapas-etapa is-disable">
                <p class="counter-etapas-etapa-2">
                    2
                </p>
            </div>
            <div class="counter-etapas-etapa is-disable">
                <p class="counter-etapas-etapa-3">
                    3
                </p>
            </div>
            <div class="counter-etapas-etapa is-disable">
                <p class="counter-etapas-etapa-4">
                  4
                </p>
            </div>
        </div>
    </div>

      <div class="etapas-btn etapas-btn-cadastro">
        <button id="btn-prev" class="btn etapas-btn-item">
            Voltar
        </button>
        <button id="btn-next" class="btn etapas-btn-item">
            Avançar
        </button>
      </div>
    </form>
  </div>
</section>




















 <!-- <section class="container container-cadastro">
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
                    <label for='selecao-arquivo'>
                        <img id="foto-perfil" src="{{asset('images/componentes/perfil.svg')}}" alt="Insira sua imagem de perfil">
                    </label>
                    @error('foto')
                    <span class="erro" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input id="selecao-arquivo" type="file" name="foto" class="perfil-img" accept=".jpg, .jpeg, .png">
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
                  <span class="erro" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-email">
                  <input id="email" type="email" placeholder="E-mail" class="form-input-item @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="erro" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
            </div>
            <div class="form-inputs">
                <div class="form-input-telefone">
                    <input id="login" type="text" placeholder="Apelido" class="form-input-item @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                    @error('login')
                    <span class="erro" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-data-nascimento">
                  <input id="data-nascimento" type="text" placeholder="dd/mm/AAAA" class="form-input-item @error('nascimento') is-invalid @enderror" data-mask="00/00/0000" name="nascimento" value="{{ old('nascimento') }}" autocomplete="data-nascimento" autofocus>
                  @error('nascimento')
                  <span class="erro" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-rg">
                  <input id="rg" type="text" placeholder="RG" class="form-input-item @error('rg') is-invalid @enderror" name="rg" value="{{ old('rg') }}" autocomplete="rg" autofocus>
                  @error('rg')
                  <span class="erro" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-cpf">
                  <input id="cpf" type="text" placeholder="CPF" class="form-input-item @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" data-mask="000.000.000-00" autocomplete="cpf" autofocus>
                  @error('cpf')
                  <span class="erro" role="alert">
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
                    <input id="senha" type="password" placeholder="Senha" class="form-input-item @error('password') is-invalid @enderror" name="password"  autocomplete="password">
                    @error('password')
                    <span class="erro" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-inputs">
                <div class="form-input-confirmar-senha">
                    <input id="confirmar-senha" type="password" placeholder="Confirmar senha" class="form-input-item" name="password_confirmation"   autocomplete="password_confirmation">
                </div>
            </div>

            <div>
              <button type="submit" class="btn btn-login btn-cadastro">
                Entrar
              </button>
            </div>

        </form>
    </div>
</section> -->

@endsection
