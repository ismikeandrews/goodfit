@extends('layouts.app')

@section('content')
<div class="container content-perfil">
		<div class="icon-voltar">
	      	<a href="/home">
	        	<img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Voltar" class="icon-voltar-img">
	      	</a>
	    </div>

		<div class="content-perfil-image">
			<img class="content-perfil-image-img" src="/images/candidatos/{{$candidato->fotoCandidato}}" alt="Foto Perfil">
		</div>

		<form enctype="multipart/form-data"  action="/candidato/configuracoes" method="post">
		@csrf
			<label class="btn btn-perfil" for='selecao-arquivo'>Selecionar Arquivo</label>
			<input id='selecao-arquivo' type="file" name="foto"><br>
		  	<input class="btn btn-perfil" type="submit" value="Enviar">
		</form>

		<br>
		<input class="form-input-item input-perfil" type="text" name="name" value="{{$candidato->nomeCandidato}}">
		<br>
		<input class="form-input-item input-perfil" type="number" name="name" value="{{$candidato->cpfCandidato}}">
		<br>
		<input class="form-input-item input-perfil" type="number" name="name" value="{{$candidato->rgCandidato}}">
		<br>
		<input class="form-input-item input-perfil" type="text" name="name" value="{{$candidato->dataNascimentoCandidato}}">
		<br>
		<input class="form-input-item input-perfil" type="text" name="name" value="{{$usuario->loginUsuario}}">
		<br>
		<input class="form-input-item input-perfil" type="text" name="name" value="{{$usuario->email}}">
	</div>
@endsection
