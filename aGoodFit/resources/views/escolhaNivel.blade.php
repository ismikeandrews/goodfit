@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header ">Escolha seu Nivel de Usuario</div>

        <div class="card-body">

            <div class="form-group row">
              @foreach($niveis as $nivel)
              <div class="col-md-4">
                <a href="/nivelusuario/validar/{{$nivel->codNivelUsuario}}">{{$nivel->nomeNivelUsuario}}</a>
              </div>
              @endforeach
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
