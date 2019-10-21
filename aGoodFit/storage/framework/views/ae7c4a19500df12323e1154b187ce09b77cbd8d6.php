<?php $__env->startSection('content'); ?>

<section class="container container-login">
    <div class="logo-content">
        <div class="logo">
            <img src="<?php echo e(asset('images/componentes/logo.png')); ?>" alt="Logo - A Good Fit" class="logo-img">
        </div>
    </div>

    <div class="section section-login">
        <div class="intro">
            <h1 class="intro-title">Seja bem-vindo a <span class="intro-title-span">Good Fit</span></h1>
            <h3 class="intro-desc">Entre para acessar a plataforma</h3>
        </div>

        <form class="form" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-inputs">
                <div class="form-input-email">
                  <input id="email" type="email" placeholder="Email" class="form-input-item <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>"  autocomplete="email" autofocus>

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
                <div class="form-input-senha">
                    <input id="password" type="password" placeholder="Senha" class="form-input-item <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password"  autocomplete="current-password">

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

            <div class="form-label">
              <?php if(Route::has('password.request')): ?>
              <a class="label label-senha" href="<?php echo e(route('password.request')); ?>">
                <?php echo e(__('Esqueceu a senha?')); ?>

              </a>
              <?php endif; ?>
            </div>

            <div class="login-btn-entrar">
              <button type="submit" class="btn btn-login">
                <?php echo e(__('Entrar')); ?>

              </button>
            </div>

            <div class="form-label">
              <p class="label label-cadastrar">Não tem uma conta?</a>
            </div>

            <div class="cadastro-content">
              <div class="cadastro-content-item">
                <a href="/nivelusuario/validar/2" class="btn btn-cadastrar">
                    <?php echo e(__('Cadastre-se')); ?>

                </a>
              </div>

              <div class="cadastro-content-item">
                <button type="submit" class="btn btn-cod">
                  <?php echo e(__('Código de cadastro')); ?>

                </button>
              </div>
            </div>

        </form>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/auth/login.blade.php ENDPATH**/ ?>