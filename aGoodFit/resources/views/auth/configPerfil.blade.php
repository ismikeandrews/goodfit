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
			@error('foto')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			<br>
			@enderror
		</div>

		<div class="content-perfil-desc">
			Nome
			<input class="form-input-item form-input-item-perfil" type="text" name="nome" value="{{$candidato->nomeCandidato}}">
			@error('nome')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			<br>
			@enderror
			CPF
			<input class="form-input-item form-input-item-perfil" type="text" name="cpf" value="{{$candidato->cpfCandidato}}">
			@error('cpf')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			<br>
			@enderror
			RG
			<input class="form-input-item form-input-item-perfil" type="text" name="rg" value="{{$candidato->rgCandidato}}">
			@error('rg')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			<br>
			@enderror
			Data de nascimento
			<input class="form-input-item form-input-item-perfil" type="text" name="dataNascimentoCandidato" value="{{$candidato->dataNascimentoCandidato}}">
			@error('dataNascimentoCandidato')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			<br>
			@enderror
			Login
			<input class="form-input-item form-input-item-perfil" type="text" name="login" value="{{$usuario->loginUsuario}}">
			@error('login')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			<br>
			@enderror
			E-mail
			<input class="form-input-item form-input-item-perfil" type="text" name="email" value="{{$usuario->email}}">
			@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			<br>
			@enderror
			<input class="btn btn-perfil-salvar" type="submit" value="Salvar">
		</div>
		<a href="/endereco/formulario">Pagina de endereco</a>
	</form>
</div>
@endsection
