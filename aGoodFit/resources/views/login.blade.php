@extends('layouts.app')

@section('content')

<section class="container">
    <div class="logo-content">
        <div class="logo">
            LOGO
        </div>
    </div>

    <div class="section">
        <div class="intro">
            <h1 class="intro-title">Seja bem-vindo a <span class="intro-title-span">Good Fit</span></h1>
            <h3 class="intro-desc">Entre para acessar a plataforma</h3>
        </div>

        <form class="form">
            <div class="form-inputs">
            <input type="text" placeholder="Email" class="form-input-item">
            <input type="text" placeholder="Senha" class="form-input-item">
            </div>

            <div class="form-label">
            <a href="#" class="label label-senha">Esqueceu a senha?</a>
            </div>

            <div class="btn btn-login">
            <a href="#" class="btn-link">Entrar</a>
            </div>

            <div class="btn btn-cod">
            <a href="#" class="btn-link">Código de cadastro</a>
            </div>

            <div class="form-label">
            <p class="label label-cadastrar">Não tem uma conta?</a>
            </div>

            <div class="btn btn-cadastrar">
            <a href="#" class="btn-link">Cadastre-se</a>
            </div>
        </form>
    </div>
</section>

@endsection
