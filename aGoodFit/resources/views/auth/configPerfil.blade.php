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
			<label class="content-perfil-image" id="abrirModal" for="selecao-arquivo">
				<img id="foto-perfil" class="content-perfil-image-img @error('foto') content-perfil-image-img-erro @enderror" src="/images/candidatos/{{Auth::user()->fotoUsuario}}" alt="Foto Perfil">
			</label>
			<input id='selecao-arquivo' type="file" name="foto" class="content-perfil-input-foto" accept=".jpg, .jpeg, .png">

			<div id="modal-cortar" class="modal">
				<div class="modal-conteudo">
					<div class="modal-conteudo-header">
						<span id="modal-fechar" class="modal-conteudo-header-fechar">&times;</span>
						<h2>Foto</h2>
					</div>
					<div class="modal-conteudo-body">
							<div id="image_demo">

							</div>
							<button type="button" class="btn crop_image" name="button">Cortar e salvar</button>
					</div>
					<div class="modal-conteudo-footer">
						<h3>Footer</h3>
					</div>
				</div>
			</div>

			@error('foto')
			<span class="erro erro-center" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			<br>
			@enderror
		</div>

		<div class="content-perfil-desc">
			<div class="content-perfil-desc-item">
				Nome
				<input class="form-input-item form-input-item-perfil" type="text" name="nome" value="{{$candidato->nomeCandidato}}">
				@error('nome')
					<span class="erro" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>

			<div class="content-perfil-desc-item">
				CPF
				<input class="form-input-item form-input-item-perfil" type="text" name="cpf" value="{{$candidato->cpfCandidato}}">
				@error('cpf')
				<span class="erro" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="content-perfil-desc-item">
				RG
				<input class="form-input-item form-input-item-perfil" type="text" name="rg" value="{{$candidato->rgCandidato}}">
				@error('rg')
				<span class="erro" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="content-perfil-desc-item">
				Data de nascimento
				<input class="form-input-item form-input-item-perfil" type="text" name="dataNascimentoCandidato" value="{{$candidato->dataNascimentoCandidato}}">
				@error('dataNascimentoCandidato')
				<span class="erro" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="content-perfil-desc-item">
				Login
				<input class="form-input-item form-input-item-perfil" type="text" name="login" value="{{$usuario->loginUsuario}}">
				@error('login')
				<span class="erro" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="content-perfil-desc-item">
				E-mail
				<input class="form-input-item form-input-item-perfil" type="text" name="email" value="{{$usuario->email}}">
				@error('email')
				<span class="erro" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<input class="btn btn-perfil-salvar" type="submit" value="Salvar">
		</div>
		<a href="/endereco/formulario">Página de endereco</a>
	</form>
</div>
@endsection
