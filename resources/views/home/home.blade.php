@extends('layouts.app')

@section('content')

<section class="container container-home">
    <div class="home-content-header">
        <div class="home-content-logo">
            <img src="{{asset('images/componentes/logo-ijc.png')}}" alt="Logo - Instituto Jô Clemente" class="home-content-logo-img">
        </div>
    </div>

    <div class="home-content">
        <div class="home-content-desc">
            <h1 class="home-content-desc-title">EMPREGO PARA <span class="home-content-desc-title-span">TODOS</span></h1>
            <h3 class="home-content-desc-text">O match perfeito, o que mais combinar com você.</h3>
        </div>
    </div>


</section>

@endsection
