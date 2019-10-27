@extends('layouts.app')

@section('content')

@if($curriculo == null)
<section class="page-section-null">
	<div class="page-content-null page-content-null-curriculo">
		 <div class="page-content-null-img">
			 <img src='{{asset("images/componentes/menu-curriculo.svg")}}' alt="Ícone de currículo" class="page-null-img">
		 </div>
		 <div class="page-content-null-text">
			Para continuar<br> cadastre um currículo
		</div>
		<a href="/curriculo/formulario" class="btn btn-page-null">
				Cadastro do currículo
		</a>
	</div>

	@elseif($vagas == null)
	<div class="page-content-null">
		Nenhuma vaga encontrada no momento 🙁
	</div>
</section>
@endif

@isset($curriculo)
@foreach ($vagas as $vaga)
	<section class="container-vagas vagas">
		<div class="vagas-empresa">
			<div class="vagas-empresa-logo">
				<img src="images/empresas/{{$vaga->usuario->fotoUsuario}}" alt="Vagas - {{$vaga->empresa->nomeFantasiaEmpresa}}" class="vagas-empresa-logo-img">
			</div>
		</div>

		<div class="vagas-btn">
			<div class="vagas-btn-item vagas-btn-side-item">
				<img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Vaga anterior" class="vagas-btn-side-icon">
			</div>
			<a href="/status/{{$vaga->codVaga}}" class="vagas-btn-item vagas-btn-item-inscrever">
				<img src="{{asset('images/componentes/vagas-check.svg')}}" alt="Aceitar vaga" class="vagas-btn-icon">
				<!-- <div class="vagas-btn-item-inscrever-text">
					Inscreva-se
				</div> -->
			</a>
			<div class="vagas-btn-item vagas-btn-side-item">
				<img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Próxima vaga" class="vagas-btn-side-icon">
			</div>
		</div>

		<div class="container container-vagas">
			<div class="vagas-content">
				<h1 class="vagas-content-title">
					{{ $vaga->nomeProfissao }}
				</h1>

				<div class="vagas-content-desc">
					<img src="{{asset('images/icones/empresa.png')}}" alt="{{ $vaga->nomeFantasiaEmpresa }}" class="vagas-content-desc-icon">
					<p class="vagas-content-desc-nome">
						{{ $vaga->nomeFantasiaEmpresa }}
					</p>
				</div>
				<div class="vagas-content-desc">
					<img src="{{asset('images/icones/local.png')}}" alt="Endereço da empresa" class="vagas-content-desc-icon">
					<p class="vagas-content-desc-local">
						{{ $vaga->logradouroEndereco }}, {{ $vaga->numeroEndereco }} - {{ $vaga->cepEndereco }}
					</p>
				</div>

				<div class="vagas-content-tags">
					<div class="vagas-content-tags-item">
						<img src="{{asset('images/componentes/vagas-periodo.svg')}}" alt="Período de trabalho" class="vagas-content-tags-item-icon">
						<p class="vagas-content-tags-item-text">Tempo Integral</p>
					</div>
					<div class="vagas-content-tags-item">
						<img src="{{asset('images/componentes/vagas-qtd.svg')}}" alt="Quantidade de vagas" class="vagas-content-tags-item-icon">
						<p class="vagas-content-tags-item-text">{{ $vaga->quantidadeVaga }} vagas</p>
					</div>
				</div>

				<div class="vagas-content-sobre">
					<div class="vagas-content-sobre-desc">
						<h3 class="vagas-content-sobre-title">Descrição</h3>
						<p class="vagas-content-sobre-text">
							{{ $vaga->descricaoVaga }}
						</p>
					</div>

					<div class="vagas-content-sobre-requisitos">
						<h3 class="vagas-content-sobre-title">Requisitos</h3>
						<div class="vagas-content-sobre-requisitos-item">

							@foreach ($vaga->requisitos as $requisito)
								<div class="curriculo-content-item">
									<div class="curriculo-content-item-label">
										<img src='{{asset("images/icones/habilidades/$requisito->imagemAdicional")}}' alt="Requisito - {{ $requisito->nomeAdicional }}" class="curriculo-content-item-label-icon">
										<p class="curriculo-content-item-label-desc">
											{{ $requisito->nomeAdicional }}
										</p>
									</div>
								</div>
							@endforeach
						</div>
					</div>

					<div class="vagas-content-sobre-beneficios">
						<h3 class="vagas-content-sobre-title">Benefícios</h3>
						<ul class="vagas-content-sobre-beneficios-list">
							@foreach ($vaga->beneficios as $beneficio)
								<li class="vagas-content-sobre-beneficios-list-item"> {{ $beneficio->nomeBeneficio }} </li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endforeach
@endisset
@endsection
