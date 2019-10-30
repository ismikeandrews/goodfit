@extends('layouts.app')

@section('content')
	<section class="container container-curriculo view">

		<!--Sobre mim-->
		<div class="curriculo-title">
	        Sobre mim
	    </div>

	    <div class="curriculo-desc">
        	Um pouco sobre mim <span>...</span>
	    </div>

	    <div class="curriculo-etapa1-submenu">
	      <div class="curriculo-etapa1-submenu-item is-active">
	        <img src="{{asset('images/componentes/etapa1-video.svg')}}" alt="Currículo - Descrição sobre mim em forma de vídeo" class="curriculo-etapa1-submenu-item-icon">
	      </div>

	      <div class="curriculo-etapa1-submenu-item">
	        <img src="{{asset('images/componentes/etapa1-texto.svg')}}" alt="Currículo - Descrição sobre mim em forma de texto" class="curriculo-etapa1-submenu-item-icon">
	      </div>
	    </div>

	    <div class="curriculo-etapa1-content is-active">
	          <div class="curriculo-etapa1-content-video">
	            <img src="{{asset('images/icones/video.png')}}" alt="Currículo - Descrição sobre mim em forma de vídeo" class="curriculo-etapa1-content-video-icon">

	            @if($curriculo->videoCurriculo)
	            	tem video
	            @else
	            	<p class="curriculo-etapa1-content-video-desc">
		            	Você não possui uma descrição em vídeo
		            </p>
	            @endif
	          </div>
	    </div>

	    <div class="curriculo-etapa1-content">
	      <div class="curriculo-etapa1-content-text">
	          <textarea name="descricaoCurriculo" class="curriculo-etapa1-textarea" placeholder="Escreva uma breve descrição sobre você..." readonly>@if($curriculo->descricaoCurriculo){{ $curriculo->descricaoCurriculo }}@endif</textarea>
	      </div>
	      <div class="box-hidden">
	      </div>
	    </div>

		<!--Requisitos-->  
	    <div class="curriculo-title">
        	Requisitos
	    </div>

	    <div class="curriculo-desc">
	       	Minhas formações básicas em<span>...</span>
	    </div>

	    <div class="curriculo-etapa2">
	        <div class="curriculo-content-item-etapa-2 view">
	            <div class="curriculo-select">
	                <label class="curriculo-content-item-label curriculo-select-box view">
	                    <img src='{{asset("images/icones/requisitos/escolaridade.png")}}' alt="Requisito - Nível de escolaridade" class="curriculo-select-box-icon view">

	                    <div class="curriculo-select-content view">
	                        <p> <b> Escolaridade </b> </p>
	                        <p> {{ $curriculo->escolaridade->nomeAdicional }}</p>
	                    </div>
	                </label>
	            </div>
	        </div>


	        <div class="curriculo-content-item-etapa-2 view">
	            <div class="curriculo-select js-curriculo-parent">
	            	<label class="curriculo-content-item-label curriculo-select-box view">
	                    <img src='{{asset("images/icones/requisitos/alfabetizacao.png")}}' alt="Requisito - Nível de alfabetização" class="curriculo-select-box-icon view">

	                    <div class="curriculo-select-content view">
	                        <p> <b> Alfabetização </b> </p>
	                        <p> {{ $curriculo->alfabetizacao->nomeAdicional }}</p>
	                    </div>
	                </label>
	            </div>
	        </div>
	    </div>

	    <!--Habilidades-->
	    <div class="curriculo-title">
		    Habilidades
		</div>
		<div class="curriculo-desc">
		    Eu sou bom com<span>...</span>
		</div>
		<div class="curriculo-etapa3 view">
		    @foreach ($candidato->habilidades as $habilidade)
		        <div class="curriculo-content-item">
		            <label class="curriculo-content-item-label">
		                <img src='{{asset("images/icones/habilidades/$habilidade->imagemAdicional")}}' alt="Habilidades - Bom com {{$habilidade->nomeAdicional}}" class="curriculo-content-item-label-icon">
		                <p class="curriculo-content-item-label-desc">
		                    {{$habilidade->nomeAdicional}}
		                </p>
		            </label>
		        </div>
		    @endforeach
		</div>

		<!--Objetivos Profissionais-->
		<div class="curriculo-title">
		    Objetivo profissional
		</div>
		
		<div class="curriculo-desc">
		    Gostaria de trabalhar com<span>...</span>
		</div>
		
		<div class="curriculo-etapa4">
		    @foreach ($candidato->categorias as $categoria)
		    <div class="curriculo-content-item">
		        <label class="curriculo-content-item-label" for="objetivo-{{$categoria->nomeCategoria}}">
			        <img src='{{asset("images/icones/profissao/$categoria->imagemCategoria")}}' alt="Objetivo Profissional - {{$categoria->nomeCategoria}}" class="curriculo-content-item-label-icon">
			        
			        <p class="curriculo-content-item-label-desc">
			            {{$categoria->nomeCategoria}}
			        </p>
		       	</label>
		    </div>
		    @endforeach
		</div>

		<div class="etapas-btn etapas-btn-curriculo">
	        <button class="btn curriculo-btn-item">
	            Download
	        </button>

	        <a href="/curriculo/formulario/editar" class="btn curriculo-btn-item">
	            Editar
	        </a>
	    </div>
	</section>
@endsection