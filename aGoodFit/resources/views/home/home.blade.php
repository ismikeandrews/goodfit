@extends('layouts.app')

@section('content')

<section class="container container-home">
    <div class="home-content-header">
        <div class="home-content-logo">
            <img src="{{asset('images/componentes/logo-goodfit.png')}}" alt="Logo - A Good Fit" class="home-content-logo-img">
        </div>
    </div>

    <div class="home-content">
        <div class="home-content-desc">
            <h1 class="home-content-desc-title">Seja bem-vindo a <span class="home-content-desc-title-span">Good Fit</span></h1>
            <h3 class="home-content-desc-text">Entre para acessar a plataforma</h3>
        </div>
    </div>


</section>



@endsection
