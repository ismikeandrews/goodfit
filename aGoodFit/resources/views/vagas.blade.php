@extends('layouts.app')

@section('content')

@if($curriculo == null)
<section class="vagas-section-null">
	<div class="vagas-content-null vagas-content-null-curriculo">
		 <div class="vagas-content-null-img">
			 <img src='{{asset("images/componentes/menu-curriculo.svg")}}' alt="Vagas - Outback" class="vagas-null-img">
		 </div>
		 <div class="vagas-content-null-text">
			Para continuar<br> cadastre um currículo
		</div>
		<a href="/curriculo/formulario" id="btn-vaga-null" class="btn btn-vagas-null">
				Cadastro do currículo
		</a>
	</div>

	@elseif($vagas == null)
<<<<<<< HEAD
	<div class="vagas-content-null">
		Nenhuma vaga encontrada no momento 🙁
=======
	<div class="vagas-content-null vagas-content-null-vaga">
		Nenhuma vaga encontrada 🙁
>>>>>>> 7a61fcbe71107723c52164295b15c182dd872160
	</div>
</section>
@endif

@isset($curriculo)
	<section class="container-vagas vagas">
	@foreach ($vagas as $vaga)
		<div class="vagas-empresa">
			<div class="vagas-empresa-logo">
				<img src='{{asset("images/componentes/empresa-colegio.jpg")}}' alt="Vagas - Outback" class="vagas-empresa-logo-img">
			</div>
		</div>

		<div class="vagas-btn">
			<div class="vagas-btn-item vagas-btn-side-item">
				<img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Recusar vaga" class="vagas-btn-side-icon">
			</div>
			<div class="vagas-btn-item vagas-btn-item-inscrever">
				<img src="{{asset('images/componentes/vagas-check.svg')}}" alt="Aceitar vaga" class="vagas-btn-icon">
				<!-- <div class="vagas-btn-item-inscrever-text">
					Inscreva-se
				</div> -->
			</div>
			<div class="vagas-btn-item vagas-btn-side-item">
				<img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Aceitar vaga" class="vagas-btn-side-icon">
			</div>
		</div>

		<div class="container container-vagas">
			<div class="vagas-content">
				<h1 class="vagas-content-title">
					{{ $vaga->nomeProfissao }}
				</h1>

				<div class="vagas-content-desc">
					<img src="{{asset('images/icones/empresa.png')}}" alt="Nome da empresa" class="vagas-content-desc-icon">
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
						<img src="{{asset('images/componentes/vagas-periodo.svg')}}" 	alt="Endereço da empresa" class="vagas-content-tags-item-icon">
						<p class="vagas-content-tags-item-text">Tempo Integral</p>
					</div>
					<div class="vagas-content-tags-item">
						<img src="{{asset('images/componentes/vagas-qtd.svg')}}" alt="Endereço da empresa" class="vagas-content-tags-item-icon">
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
	@endforeach
	</section>
@endisset
@endsection
