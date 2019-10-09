@extends('layouts.app')

@section('content')
<section class="container">

	<div class="logo-enterprise">
		<img src="{{asset('images/componentes/mc.png')}}">
	</div>

	<div class="buttons">
		<img src="{{asset('images/componentes/tinder.svg')}}">
	</div>
		
	<div class="content">
		<h1>Analista de Performance<br>(Google Adwords)</h1>
		<p><a href="#">Mc Donald's Brasil</a> | Rua Bento de Andrade, 660, Jardim Paulista - São Paulo, SP</p>

		<div class="tags">
			<p>Tempo Integral</p>
			<p>Há 3 dias</p>
			<p>300 candidatos</p>
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
</section>
@endsection