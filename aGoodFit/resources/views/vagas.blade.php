@extends('layouts.app')

@section('content')

<section class="vagas">
	<div class="vagas-empresa">
		<div class="vagas-empresa-logo">
			<img src="{{asset('images/componentes/empresa-outback.png')}}" alt="Vagas - Outback" class="vagas-empresa-logo-img">
		</div>
	</div>

	<div class="vagas-btn">
		<div class="vagas-btn-item vagas-btn-side-item">
			<img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Recusar vaga" class="vagas-btn-side-icon">
		</div>
		<div class="vagas-btn-item">
			<img src="{{asset('images/componentes/vagas-x.svg')}}" alt="Recusar vaga" class="vagas-btn-icon">
		</div>
		<div class="vagas-btn-item">
			<img src="{{asset('images/componentes/vagas-check.svg')}}" alt="Aceitar vaga" class="vagas-btn-icon">
		</div>
		<div class="vagas-btn-item vagas-btn-side-item">
			<img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Aceitar vaga" class="vagas-btn-side-icon">
		</div>
	</div>
		
	<div class="container container-vagas">
		<div class="vagas-content">
			<h1 class="vagas-content-title">
				Cozinheiro
			</h1>

			<div class="vagas-content-desc">
				<img src="{{asset('images/icones/empresa.png')}}" alt="Nome da empresa" class="vagas-content-desc-icon">
				<p class="vagas-content-desc-nome">
					Outback Steakhouse Restaurantes Brasil S.a.
				</p>
			</div>
			<div class="vagas-content-desc">
				<img src="{{asset('images/icones/local.png')}}" alt="Endereço da empresa" class="vagas-content-desc-icon">
				<p class="vagas-content-desc-local">
					Rua Engenheiro Camilo Oliveti 295 loja B6A - Vila Itapegica, Guarulhos
				</p>
			</div>

			<div class="vagas-content-tags">
				<div class="vagas-content-tags-item">
					<img src="{{asset('images/componentes/vagas-periodo.svg')}}" 	alt="Endereço da empresa" class="vagas-content-tags-item-icon">
					<p class="vagas-content-tags-item-text">Tempo Integral</p>
				</div>
				<div class="vagas-content-tags-item">
					<img src="{{asset('images/componentes/vagas-qtd.svg')}}" alt="Endereço da empresa" class="vagas-content-tags-item-icon">
					<p class="vagas-content-tags-item-text">300 vagas</p>
				</div>
			</div>

			<div class="vagas-content-sobre">
				<div class="vagas-content-sobre-desc">
					<h3 class="vagas-content-sobre-title">Descrição</h3>
					<p class="vagas-content-sobre-text">
						Auxiliar no pré-preparodos alimentos solicitados pelos clientes, seguindo os procedimentosoperacionais padronizados determinados pelo Outback, mantendo sempre aconfidencialidade dos ingredientes e procedimentos envolvidos durante oprocesso, agilizando a finalização dos produtos garantindo a qualidade Outback.
					</p>
				</div>
				
				<div class="vagas-content-sobre-requisitos">
					<h3 class="vagas-content-sobre-title">Requisitos</h3>
					<div class="vagas-content-sobre-requisitos-item">
						<div class="curriculo-content-item">
							<div class="curriculo-content-item-label">
								<img src='{{asset("images/icones/habilidades/comunicativo.png")}}' alt="Requisito - Comunicativo" class="curriculo-content-item-label-icon">
								<p class="curriculo-content-item-label-desc">
									Comunicativo
								</p>
							</div>
						</div>
					
						<div class="curriculo-content-item">
							<div class="curriculo-content-item-label">
								<img src='{{asset("images/icones/habilidades/relacionamento.png")}}' alt="Requisito - Bom relacionamento" class="curriculo-content-item-label-icon">
								<p class="curriculo-content-item-label-desc">
									Relacionamento
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="vagas-content-sobre-beneficios">
					<h3 class="vagas-content-sobre-title">Benefícios</h3>
					<ul class="vagas-content-sobre-beneficios-list">
						<li class="vagas-content-sobre-beneficios-list-item">VT</li>
						<li class="vagas-content-sobre-beneficios-list-item">VR / VA</li>
						<li class="vagas-content-sobre-beneficios-list-item">Convênio Médico</li>
						<li class="vagas-content-sobre-beneficios-list-item">Convênio Odontológico</li>
						<li class="vagas-content-sobre-beneficios-list-item">Happy Hour</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection