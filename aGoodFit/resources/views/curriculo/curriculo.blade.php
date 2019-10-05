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
            <div class="counter-etapas-etapa is-disable">
                <p class="counter-etapas-etapa-5">
                    5
                </p>
            </div>
        </div>
    </div>

    @include('curriculo.curriculo-etapa1')

    <div id="btn-next" class="btn btn-next">
        Next
    </div>
  </div>
</section>

@endsection
