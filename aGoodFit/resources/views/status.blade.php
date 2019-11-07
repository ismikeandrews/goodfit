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
			@foreach($candidatura->vaga as $vaga)
				<!-- inicio modal -->
				<div class="container-modal">
					<div id="modal" class="modal">
						<div class="modal-content">
							<span class="modal-content-header-close">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 13.244 11" class="voltar-svg">
                  <g transform="translate(0)">
                    <path class="a" d="M12.5,4.461l.021,0H3.658L6.444,1.674a.732.732,0,0,0,0-1.029L6.01.212a.725.725,0,0,0-1.024,0L.211,4.986a.73.73,0,0,0,0,1.027l4.776,4.776a.726.726,0,0,0,1.024,0l.433-.434a.717.717,0,0,0,.211-.512.7.7,0,0,0-.211-.5L3.626,6.534h8.883a.751.751,0,0,0,.735-.743V5.177A.736.736,0,0,0,12.5,4.461Z" transform="translate(0)"></path>
                  </g>
                </svg>
							</span>
							<div class="modal-content-body">
								<img src="images/empresas/{{$vaga->usuario->fotoUsuario}}" alt="Logo - {{$vaga->empresa->nomeFantasiaEmpresa}}" class="modal-content-body-img">
								<p class="modal-content-body-fantasia">{{$vaga->empresa->nomeFantasiaEmpresa}}</p>
								<p class="modal-content-body-profissao">{{$vaga->profissao->nomeProfissao}}</p>
								<a href="/candidatura/delete/{{$vaga->codVaga}}">
									<div class="modal-content-body-button">
										<img src="{{asset('images/componentes/vagas-x.svg')}}" alt="" class="modal-content-body-button-icon">
										<p class="modal-content-body-button-text">Cancelar candidatura</p>
									</div>
								</a>
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
