<?php $__env->startSection('content'); ?>

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
					<img src="<?php echo e(asset('images/componentes/candidatura-todos.svg')); ?>" alt="Filtro de status da vaga - Todas" class="status-header-menu-content-item-icon">
				</li>
				<li class="status-header-menu-content-item">
					<img src="<?php echo e(asset('images/componentes/candidatura-aprovado.svg')); ?>" alt="Filtro de status da vaga - Aprovadas" class="status-header-menu-content-item-icon">
				</li>
				<li class="status-header-menu-content-item">
					<img src="<?php echo e(asset('images/componentes/candidatura-andamento.svg')); ?>" alt="Filtro de status da vaga - Em andamento" class="status-header-menu-content-item-icon">
				</li>
				<li class="status-header-menu-content-item">
					<img src="<?php echo e(asset('images/componentes/candidatura-finalizado.svg')); ?>" alt="Filtro de status da vaga - Finalizada" class="status-header-menu-content-item-icon">
				</li>
			</ul>
		</div>
	</div>

	<div class="container container-status">
		<div class="status-box">
			<div class="status-box-desc">
				<div class="status-box-desc-img">
					<img src="<?php echo e(asset('images/status/empresa.png')); ?>" alt="Logo MC Donalds" class="status-box-desc-img-icon">
				</div>
				<div class="status-box-desc-content">
					<div class="status-box-desc-content-title">
						Analista de Performance (Google Adwords)				
					</div>
					<div class="status-box-desc-content-nome">
						Mc Donald's Brasil		
					</div>
					<div class="status-box-desc-content-status">
						<div class="status-box-desc-content-status-cor finalizado">
						</div>
						<div class="status-box-desc-content-status-text">
							Finalizado
						</div>
					</div>
				</div>
			</div>

			<div class="status-box-qtd">
				30
				<span>Vagas</span>
			</div>
		</div>

		<div class="status-box">
			<div class="status-box-desc">
				<div class="status-box-desc-img">
					<img src="<?php echo e(asset('images/status/empresa.png')); ?>" alt="Logo MC Donalds" class="status-box-desc-img-icon">
				</div>
				<div class="status-box-desc-content">
					<div class="status-box-desc-content-title">
						Analista de Performance (Google Adwords)				
					</div>
					<div class="status-box-desc-content-nome">
						Mc Donald's Brasil		
					</div>
					<div class="status-box-desc-content-status">
						<div class="status-box-desc-content-status-cor aprovado">
						</div>
						<div class="status-box-desc-content-status-text">
							Aprovado
						</div>
					</div>
				</div>
			</div>

			<div class="status-box-qtd">
				30
				<span>Vagas</span>
			</div>
		</div>

		<div class="status-box">
			<div class="status-box-desc">
				<div class="status-box-desc-img">
					<img src="<?php echo e(asset('images/status/empresa.png')); ?>" alt="Logo MC Donalds" class="status-box-desc-img-icon">
				</div>
				<div class="status-box-desc-content">
					<div class="status-box-desc-content-title">
						Analista de Performance (Google Adwords)
					</div>
					<div class="status-box-desc-content-nome">
						Mc Donald's Brasil		
					</div>
					<div class="status-box-desc-content-status">
						<div class="status-box-desc-content-status-cor andamento">
						</div>
						<div class="status-box-desc-content-status-text">
							Em andamento
						</div>
					</div>
				</div>
			</div>

			<div class="status-box-qtd">
				30
				<span>Vagas</span>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/status.blade.php ENDPATH**/ ?>