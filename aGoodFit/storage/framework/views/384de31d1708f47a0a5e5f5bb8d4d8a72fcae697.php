<?php $__env->startSection('content'); ?>

<section class="container-vagas vagas">
	<?php $__currentLoopData = $vagas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vaga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="vagas-empresa">
			<div class="vagas-empresa-logo">
				<img src='<?php echo e(asset("images/componentes/empresa-colegio.jpg")); ?>' alt="Vagas - Outback" class="vagas-empresa-logo-img">
			</div>
		</div>

		<div class="vagas-btn">
			<div class="vagas-btn-item vagas-btn-side-item">
				<img src="<?php echo e(asset('images/componentes/seta-voltar.svg')); ?>" alt="Recusar vaga" class="vagas-btn-side-icon">
			</div>
			<div class="vagas-btn-item">
				<img src="<?php echo e(asset('images/componentes/vagas-x.svg')); ?>" alt="Recusar vaga" class="vagas-btn-icon">
			</div>
			<div class="vagas-btn-item">
				<img src="<?php echo e(asset('images/componentes/vagas-check.svg')); ?>" alt="Aceitar vaga" class="vagas-btn-icon">
			</div>
			<div class="vagas-btn-item vagas-btn-side-item">
				<img src="<?php echo e(asset('images/componentes/seta-voltar.svg')); ?>" alt="Aceitar vaga" class="vagas-btn-side-icon">
			</div>
		</div>

		<div class="container container-vagas">
			<div class="vagas-content">
				<h1 class="vagas-content-title">
					<?php echo e($vaga->nomeProfissao); ?>

				</h1>

				<div class="vagas-content-desc">
					<img src="<?php echo e(asset('images/icones/empresa.png')); ?>" alt="Nome da empresa" class="vagas-content-desc-icon">
					<p class="vagas-content-desc-nome">
						<?php echo e($vaga->nomeFantasiaEmpresa); ?>

					</p>
				</div>
				<div class="vagas-content-desc">
					<img src="<?php echo e(asset('images/icones/local.png')); ?>" alt="Endereço da empresa" class="vagas-content-desc-icon">
					<p class="vagas-content-desc-local">
						<?php echo e($vaga->logradouroEndereco); ?>, <?php echo e($vaga->numeroEndereco); ?> - <?php echo e($vaga->cepEndereco); ?>

					</p>
				</div>

				<div class="vagas-content-tags">
					<div class="vagas-content-tags-item">
						<img src="<?php echo e(asset('images/componentes/vagas-periodo.svg')); ?>" 	alt="Endereço da empresa" class="vagas-content-tags-item-icon">
						<p class="vagas-content-tags-item-text">Tempo Integral</p>
					</div>
					<div class="vagas-content-tags-item">
						<img src="<?php echo e(asset('images/componentes/vagas-qtd.svg')); ?>" alt="Endereço da empresa" class="vagas-content-tags-item-icon">
						<p class="vagas-content-tags-item-text"><?php echo e($vaga->quantidadeVaga); ?> vagas</p>
					</div>
				</div>

				<div class="vagas-content-sobre">
					<div class="vagas-content-sobre-desc">
						<h3 class="vagas-content-sobre-title">Descrição</h3>
						<p class="vagas-content-sobre-text">
							<?php echo e($vaga->descricaoVaga); ?>

						</p>
					</div>

					<div class="vagas-content-sobre-requisitos">
						<h3 class="vagas-content-sobre-title">Requisitos</h3>
						<div class="vagas-content-sobre-requisitos-item">

							<?php $__currentLoopData = $vaga->requisitos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requisito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="curriculo-content-item">
									<div class="curriculo-content-item-label">
										<img src='<?php echo e(asset("images/icones/habilidades/$requisito->imagemAdicional")); ?>' alt="Requisito - <?php echo e($requisito->nomeAdicional); ?>" class="curriculo-content-item-label-icon">
										<p class="curriculo-content-item-label-desc">
											<?php echo e($requisito->nomeAdicional); ?>

										</p>
									</div>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>

					<div class="vagas-content-sobre-beneficios">
						<h3 class="vagas-content-sobre-title">Benefícios</h3>
						<ul class="vagas-content-sobre-beneficios-list">
							<?php $__currentLoopData = $vaga->beneficios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beneficio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="vagas-content-sobre-beneficios-list-item"> <?php echo e($beneficio->nomeBeneficio); ?> </li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/vagas.blade.php ENDPATH**/ ?>