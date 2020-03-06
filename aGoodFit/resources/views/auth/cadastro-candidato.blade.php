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
      <div class="counter-etapas-content">
        @include('auth.cadastro.etapa3')
      </div>
      <div class="counter-etapas-content">
        @include('auth.cadastro.etapa4')
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
        <button id="btn-prev" class="btn etapas-btn-item is-disable">
          Voltar
        </button>
        <button id="btn-next" class="btn etapas-btn-item">
          Avançar
        </button>
      </div>
    </form>
  </div>
</section>

@endsection
