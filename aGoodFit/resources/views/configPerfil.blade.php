@extends('layouts.app')

@section('content')

<div class="container container-perfil">
	<div class="icon-voltar">
		<a href="javascript:history.back()">
			<img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Voltar" class="icon-voltar-img">
		</a>
	</div>

	<form enctype="multipart/form-data"  action="/candidato/configuracoes" method="post">
		@csrf

		<div class="content-perfil">
			<label class="content-perfil-image" for='selecao-arquivo'>
				<img class="content-perfil-image-img" src="/images/candidatos/{{$candidato->fotoCandidato}}" alt="Foto Perfil">
			</label>
			<input id='selecao-arquivo' type="file" name="foto" class="content-perfil-input-foto" accept=".jpg, .jpeg, .png">
		</div>

		<div class="content-perfil-image">
			<input class="form-input-item form-input-item-perfil" type="text" name="name" value="{{$candidato->nomeCandidato}}">
			
			<input class="form-input-item form-input-item-perfil" type="number" name="name" value="{{$candidato->cpfCandidato}}">
			
			<input class="form-input-item form-input-item-perfil" type="number" name="name" value="{{$candidato->rgCandidato}}">
			
			<input class="form-input-item form-input-item-perfil" type="text" name="name" value="{{$candidato->dataNascimentoCandidato}}">
			
			<input class="form-input-item form-input-item-perfil" type="text" name="name" value="{{$usuario->loginUsuario}}">
			
			<input class="form-input-item form-input-item-perfil" type="text" name="name" value="{{$usuario->email}}">

			<input class="btn btn-perfil-salvar" type="submit" value="Salvar">
		</div>

	</form>
</div>
@endsection
