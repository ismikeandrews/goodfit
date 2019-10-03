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
                <div class="form-input-nome">
                  <input id="nome" type="text" placeholder="Nome" class="form-input-item" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>
                </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-email">
                  <input id="email" type="email" placeholder="E-mail" class="form-input-item" name="email" required autocomplete="email">
              </div>
            </div>
            <div class="form-inputs">
                <div class="form-input-telefone">
                    <input id="telefone" type="tel" placeholder="Telefone" class="form-input-item" name="telefone" required autocomplete="telefone">
                </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-data-nascimento">
                  <input id="data-nascimento" type="date" placeholder="Data de nascimento" class="form-input-item" name="data-nascimento" required autocomplete="data-nascimento">
              </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-rg">
                  <input id="rg" type="text" placeholder="RG" class="form-input-item" name="rg" required autocomplete="rg">
              </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-cpf">
                  <input id="cpf" type="text" placeholder="CPF" class="form-input-item" name="cpf" required autocomplete="cpf">
              </div>
            </div>


            <div class="form-legend">
                Senha
            </div>
            <div class="form-inputs">
                <div class="form-input-senha">
                    <input id="senha" type="password" placeholder="Senha" class="form-input-item" name="senha" required autocomplete="senha">
                </div>
            </div>

            <div class="form-inputs">
                <div class="form-input-confirmar-senha">
                    <input id="confirmar-senha" type="password" placeholder="Confirmar senha" class="form-input-item" name="confirmar-senha" required autocomplete="confirmar-senha">
                </div>
            </div>

            <div>
              <button type="submit" class="btn btn-login">
                Entrar
              </button>
            </div>

        </form>
    </div>
</section>

@endsection
