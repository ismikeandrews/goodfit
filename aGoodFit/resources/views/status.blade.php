@extends('layouts.app')

@section('content')

<section class="status">
	<div class="status-header">
		<div class="status-header-content">
			<h1 class="status-header-content-title">
				Status das candidaturas
			</h1>
			<p class="status-header-content-desc">
				Encontre todo o histórico das suas candidaturas
			</p>
		</div>

		<div class="status-header-menu">
			<ul class="status-header-menu-content">
				<li class="status-header-menu-content-item">
					<img src="{{asset('images/componentes/candidatura-todos.svg')}}" alt="Filtro de status da vaga - Todas" class="status-header-menu-content-item-icon">
				</li>
				<li class="status-header-menu-content-item">
					<img src="{{asset('images/componentes/candidatura-aprovado.svg')}}" alt="Filtro de status da vaga - Aprovadas" class="status-header-menu-content-item-icon">
				</li>
				<li class="status-header-menu-content-item">
					<img src="{{asset('images/componentes/candidatura-andamento.svg')}}" alt="Filtro de status da vaga - Em andamento" class="status-header-menu-content-item-icon">
				</li>
				<li class="status-header-menu-content-item">
					<img src="{{asset('images/componentes/candidatura-finalizado.svg')}}" alt="Filtro de status da vaga - Finalizada" class="status-header-menu-content-item-icon">
				</li>
			</ul>
		</div>
	</div>
	@if($candidaturas->count() == 0)
	<section class="page-section-null page-section-null-status">
		<div class="page-content-null page-content-null-curriculo">
			 <div class="page-content-null-img">
				 <img src='{{asset("images/componentes/menu-vagas.svg")}}' alt="Ícone de vagas" class="vagas-null-img">
			 </div>
			 <div class="page-content-null-text">
				Para continuar<br> inscreva-se em uma vaga
			</div>
			<a href="/vagas" class="btn btn-page-null">
				Vagas
			</a>
		</div>
	</section>
	@elseif($candidaturas->count() > 0)
	<div class="container container-status">
		@foreach($candidaturas as $candidatura)
			@foreach($vagas as $vaga)
				<!-- inicio modal -->
				<div class="container-modal">
					<div id="modal" class="modal">
						<div class="modal-content">
							<span class="modal-content-header-close">
								<img src="{{asset('images/componentes/seta-voltar.svg')}}" alt="Voltar" class="icon-voltar-img">
							</span>
							<div class="modal-content-body">
								<img src="images/empresas/{{$vaga->usuario->fotoUsuario}}" alt="Logo - {{$vaga->empresa->nomeFantasiaEmpresa}}" class="modal-content-body-img">
								<p class="modal-content-body-fantasia">{{$vaga->empresa->nomeFantasiaEmpresa}}</p>
								<p class="modal-content-body-profissao">{{$vaga->profissao->nomeProfissao}}</p>
								<div class="modal-content-body-box">
									<img src="{{asset('images/componentes/vagas-periodo.svg')}}" alt="Período de trabalho" class="modal-content-body-box-icon">
									<p class="modal-content-body-box-text">Tempo Integral</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- fim modal -->
				<div class="status-box">
					<div class="status-box-desc">
						<div class="status-box-desc-img">
							<img src="images/empresas/{{$vaga->usuario->fotoUsuario}}" alt="Logo - {{$vaga->empresa->nomeFantasiaEmpresa}}" class="status-box-desc-img-icon">
						</div>
						<div class="status-box-desc-content">
							<div class="status-box-desc-content-title">
								{{$vaga->profissao->nomeProfissao}}
							</div>
							<div class="status-box-desc-content-nome">
								{{$vaga->empresa->nomeFantasiaEmpresa}}
							</div>
							<div class="status-box-desc-content-status">
								<div class="status-box-desc-content-status-cor @if($candidatura->status->codStatusCandidatura == 1) aprovado @elseif($candidatura->status->codStatusCandidatura == 2) andamento @elseif($candidatura->status->codStatusCandidatura == 3) finalizado @endif">
								</div>
								<div class="status-box-desc-content-status-text">
									{{$candidatura->status->nomeStatusCandidatura}}
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		@endforeach
	</div>
	@endif
</section>
@endsection
