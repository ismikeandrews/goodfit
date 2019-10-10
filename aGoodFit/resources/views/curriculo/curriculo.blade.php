@extends('layouts.app')

@section('content')

<section class="curriculo-etapas curriculo-etapa-1">
  <div class="container">
    <div class="icon-voltar">
      <a href="javascript:history.back()">
        <img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Voltar" class="icon-voltar-img">
      </a>
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

    <form class="curriculo-form" action="/curriculo/formulario" method="post">
      @csrf
      <div class="counter-etapas-content is-active">
        @include('curriculo.curriculo-etapa1')
      </div>
      <div class="counter-etapas-content">
        @include('curriculo.curriculo-etapa2')
      </div>
      <div class="counter-etapas-content">
        @include('curriculo.curriculo-etapa3')
      </div>
      <div class="counter-etapas-content">
        @include('curriculo.curriculo-etapa-extra')
      </div>
      
      <button type="submit" name="button"> enviar </button>
    </form>

    <div class="curriculo-btn">
      <div id="btn-voltar" class="btn curriculo-btn-item is-disable">
          Voltar
      </div>
      <div id="btn-avancar" class="btn curriculo-btn-item">
          Avançar
      </div>
    </div>
  </div>
</section>

@endsection
