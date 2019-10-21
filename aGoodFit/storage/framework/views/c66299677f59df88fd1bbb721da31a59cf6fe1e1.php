<?php $__env->startSection('content'); ?>

<div class="container container-perfil">
	<div class="icon-voltar">
		<a href="javascript:history.back()">
			<img src="<?php echo e(asset('images/componentes/seta-voltar.svg')); ?>" alt="Voltar" class="icon-voltar-img">
		</a>
	</div>
	<form enctype="multipart/form-data"  action="/candidato/configuracoes" method="post">
		<?php echo csrf_field(); ?>
		<div class="content-perfil">
			<label class="content-perfil-image" for="selecao-arquivo">
				<img id="foto-perfil" class="content-perfil-image-img <?php if ($errors->has('foto')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('foto'); ?> content-perfil-image-img-erro <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" src="/images/candidatos/<?php echo e(Auth::user()->fotoUsuario); ?>" alt="Foto Perfil">
			</label>
			<input id="selecao-arquivo" type="file" name="foto" class="content-perfil-input-foto" accept=".jpg, .jpeg, .png">

			<div id="modal-cortar" class="container-modal modal">
				<div class="modal-conteudo">
					<div class="modal-conteudo-header">
						<span id="modal-fechar" class="modal-conteudo-header-fechar">&times;</span>
					</div>
					<div class="modal-conteudo-body">
						<div id="image_demo">

						</div>
						<button type="button" class="btn modal-btn-cortar crop_image" name="button">Cortar e salvar</button>
					</div>
				</div>
			</div>
			<?php if ($errors->has('foto')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('foto'); ?>
			<span class="erro erro-center" role="alert">
				<strong><?php echo e($message); ?></strong>
			</span>
			<br>
			<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
		</div>
		<div class="content-perfil-desc">
			<div class="content-perfil-desc-item">
				Nome
				<input class="form-input-item form-input-item-perfil" type="text" name="nome" value="<?php echo e($candidato->nomeCandidato); ?>">
				<?php if ($errors->has('nome')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nome'); ?>
					<span class="erro" role="alert">
						<strong><?php echo e($message); ?></strong>
					</span>
				<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
			</div>

			<div class="content-perfil-desc-item">
				CPF
				<input class="form-input-item form-input-item-perfil" type="text" name="cpf" data-mask="000.000.000-00" value="<?php echo e($candidato->cpfCandidato); ?>">
				<?php if ($errors->has('cpf')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cpf'); ?>
				<span class="erro" role="alert">
					<strong><?php echo e($message); ?></strong>
				</span>
				<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
			</div>

			<div class="content-perfil-desc-item">
				RG
				<input class="form-input-item form-input-item-perfil" type="text" name="rg" value="<?php echo e($candidato->rgCandidato); ?>">
				<?php if ($errors->has('rg')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('rg'); ?>
				<span class="erro" role="alert">
					<strong><?php echo e($message); ?></strong>
				</span>
				<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
			</div>

			<div class="content-perfil-desc-item">
				Data de nascimento
				<input class="form-input-item form-input-item-perfil" type="text" name="dataNascimentoCandidato" data-mask="00/00/0000" value="<?php echo e($candidato->dataNascimentoCandidato); ?>">
				<?php if ($errors->has('dataNascimentoCandidato')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dataNascimentoCandidato'); ?>
				<span class="erro" role="alert">
					<strong><?php echo e($message); ?></strong>
				</span>
				<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
			</div>

			<div class="content-perfil-desc-item">
				Login
				<input class="form-input-item form-input-item-perfil" type="text" name="login" value="<?php echo e($usuario->loginUsuario); ?>">
				<?php if ($errors->has('login')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('login'); ?>
				<span class="erro" role="alert">
					<strong><?php echo e($message); ?></strong>
				</span>
				<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
			</div>

			<div class="content-perfil-desc-item">
				E-mail
				<input class="form-input-item form-input-item-perfil" type="text" name="email" value="<?php echo e($usuario->email); ?>">
				<?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
				<span class="erro" role="alert">
					<strong><?php echo e($message); ?></strong>
				</span>
				<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
			</div>

			<input class="btn btn-perfil-salvar" type="submit" value="Salvar">
		</div>
		<a href="/endereco/formulario">Página de endereco</a>
	</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/auth/configPerfil.blade.php ENDPATH**/ ?>