@extends('layouts.app')

@section('content')

<section class="vagas">
	<div class="vagas-empresa">
		<div class="vagas-empresa-logo vagas-empresa-logo-mc">
			<img src="{{asset('images/componentes/empresa-mc.png')}}" alt="Vagas - MC Donalds" class="vagas-empresa-logo-img">
		</div>

		<div class="vagas-btn">
			<div class="vagas-btn-item">
				<img src="{{asset('images/componentes/vagas-x.svg')}}" alt="Recusar vaga" class="vagas-btn-icon">
			</div>
			<div class="vagas-btn-item">
				<img src="{{asset('images/componentes/vagas-check.svg')}}" alt="Aceitar vaga" class="vagas-btn-icon">
			</div>
		</div>
	</div>
		
	<div class="container container-vagas">
		<div class="vagas-content">
			<h1 class="vagas-content-title">
				Analista de Performance (Google Adwords)
			</h1>

			<div class="vagas-content-desc">
				<img src="{{asset('images/icones/empresa.png')}}" alt="Nome da empresa" class="vagas-content-desc-icon">
				<p class="vagas-content-desc-nome">
					Mc Donald's Brasil
				</p>
			</div>
			<div class="vagas-content-desc">
				<img src="{{asset('images/icones/local.png')}}" alt="Endereço da empresa" class="vagas-content-desc-icon">
				<p class="vagas-content-desc-local">
					Rua Bento de Andrade, 660, Jardim Paulista - São Paulo, SP
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

			<div class="about">
				<h3 class="about-title">Descrição</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

				<h3 class="about-title">Requisitos</h3>
					<ul>
						<li>- Certificado no Google Ads avançado</li>
						<li>- Certificado no Google Analytics avançado</li>
						<li>- Experiência comprovada em gerenciamento</li>
						<li>- Perfil analítico</li>
					</ul>

				<h3 class="about-title">Desejável</h3>
					<ul>
						<li>- Conhecimento de estratégias de Marketing</li>
						<li>- Ensino Superior completo ou cursando</li>
					</ul>

				<h3 class="about-title">Benefícios</h3>
				<ul>
					<li>- VT</li>
					<li>- VR / VA</li>
					<li>- Convênio Médico</li>
					<li>- Convênio Odontológico</li>
					<li>- Happy Hour</li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection