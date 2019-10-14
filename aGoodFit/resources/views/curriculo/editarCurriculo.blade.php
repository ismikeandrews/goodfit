@extends('layouts.app')

@section('content')
<br>
<br>
<br>
Editar o curriculo
<br>
{{$curriculo->videoCurriculo}}
<br>
{{$curriculo->descricaoCandidato}}
@foreach($cargos as $cargo)
  {{ $cargo->codCategoria }}
  <br>
@endforeach
<br>
@foreach($adicionais as $adicional)
  {{ $adicional->codAdicional }}
  <br>
@endforeach

@endsection
