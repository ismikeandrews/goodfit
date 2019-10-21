<?php $__env->startSection('content'); ?>

<section class="container container-cadastro">
    <div class="icon-voltar icon-voltar-cadastro">
      <a href="/">
        <img src="<?php echo e(asset('images/componentes/seta-voltar.svg')); ?>" alt="Voltar" class="icon-voltar-img">
      </a>
    </div>

    <div class="section section-cadastro">
        <div class="cadastro-intro">
            <h3 class="intro-desc">Preencha os dados cadastrais</h3>
        </div>

        <form enctype="multipart/form-data" class="form" method="POST" action="<?php echo e(route('register')); ?>">
          <?php echo csrf_field(); ?>
            <div class="cadastro-perfil">
                <div class="cadastro-perfil-img">
                    <label for='arquivo-foto'>
                        <img src="<?php echo e(asset('images/componentes/perfil.svg')); ?>" alt="Insira sua imagem de perfil">
                    </label>
                    <?php if ($errors->has('foto')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('foto'); ?>
                    <span class="erro" role="alert">
                      <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    <input id='arquivo-foto' type="file" name="foto" class="perfil-img" accept=".jpg, .jpeg, .png">
                </div>
                <div class="cadastro-perfil-desc">
                    Clique no ícone para inserir sua imagem
                </div>
            </div>

            <div class="form-legend">
              Dados Pessoais
            </div>

            <input id="codNivelUsuario" name="codNivelUsuario" type="hidden" value="2">
            <div class="form-inputs">
                <div class="form-input-nome">
                  <input id="nome" type="text" placeholder="Nome" class="form-input-item <?php if ($errors->has('nome')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nome'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nome" value="<?php echo e(old('nome')); ?>" autocomplete="nome" autofocus>
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
            </div>
            <div class="form-inputs">
              <div class="form-input-email">
                  <input id="email" type="email" placeholder="E-mail" class="form-input-item <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
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
            </div>
            <div class="form-inputs">
                <div class="form-input-telefone">
                    <input id="login" type="text" placeholder="Apelido" class="form-input-item <?php if ($errors->has('login')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('login'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="login" value="<?php echo e(old('login')); ?>" required autocomplete="login" autofocus>
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
            </div>
            <div class="form-inputs">
              <div class="form-input-data-nascimento">
                  <input id="data-nascimento" type="text" placeholder="dd/mm/AAAA" class="form-input-item <?php if ($errors->has('nascimento')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nascimento'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" data-mask="00/00/0000" name="nascimento" value="<?php echo e(old('nascimento')); ?>" autocomplete="data-nascimento" autofocus>
                  <?php if ($errors->has('nascimento')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nascimento'); ?>
                  <span class="erro" role="alert">
                    <strong><?php echo e($message); ?></strong>
                  </span>
                  <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
              </div>
            </div>
            <div class="form-inputs">
              <div class="form-input-rg">
                  <input id="rg" type="text" placeholder="RG" class="form-input-item <?php if ($errors->has('rg')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('rg'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="rg" value="<?php echo e(old('rg')); ?>" autocomplete="rg" autofocus>
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
            </div>
            <div class="form-inputs">
              <div class="form-input-cpf">
                  <input id="cpf" type="text" placeholder="CPF" class="form-input-item <?php if ($errors->has('cpf')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cpf'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="cpf" value="<?php echo e(old('cpf')); ?>" data-mask="000.000.000-00" autocomplete="cpf" autofocus>
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
            </div>


            <div class="form-legend">
                Senha
            </div>
            <div class="form-inputs">
                <div class="form-input-senha">
                    <input id="senha" type="password" placeholder="Senha" class="form-input-item <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password"  autocomplete="password">
                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                    <span class="erro" role="alert">
                      <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

            <div class="form-inputs">
                <div class="form-input-confirmar-senha">
                    <input id="confirmar-senha" type="password" placeholder="Confirmar senha" class="form-input-item" name="password_confirmation"   autocomplete="password_confirmation">
                </div>
            </div>

            <div>
              <button type="submit" class="btn btn-login btn-cadastro">
                Entrar
              </button>
            </div>

        </form>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/auth/cadastro-candidato.blade.php ENDPATH**/ ?>