@extends('layouts.app')

@section('content')
<section class="container">

	<div class="intro">
       	<h1 class="intro-title">Status das candidaturas</h1>
		<p class="intro-description">Encontre todo o histórico das suas candidaturas</p>
	</div>

	<div class="menu">
		<ul class="menu-content">
			<li class="menu-item icon-one">
				<img src="{{asset('images/componentes/candidatura-todos.svg')}}">
			</li>
			<li class="menu-item icon-two">
				<img src="{{asset('images/componentes/candidatura-aprovado.svg')}}">
			</li>
			<li class="menu-item icon-three">
				<img src="{{asset('images/componentes/candidatura-andamento.svg')}}">
			</li>
			<li class="menu-item icon-for">
				<img src="{{asset('images/componentes/candidatura-finalizado.svg')}}">
			</li>
		</ul>
			
	</div>

	<div class="cards">
		<div class="cards-up">
			<div class="cards-content">
			
			</div>
		</div>
	</div>
</section>
@endsection