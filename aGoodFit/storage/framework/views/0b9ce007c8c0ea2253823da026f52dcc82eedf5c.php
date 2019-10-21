<?php $__env->startSection('content'); ?>

<section class="container container-curriculo">
  <div class="curriculo-etapas curriculo-etapa-1">
    <div class="icon-voltar">
      <a href="javascript:history.back()">
        <img src="<?php echo e(asset('images/componentes/seta-voltar.svg')); ?>" alt="Voltar" class="icon-voltar-img">
      </a>
    </div>

    <div class="counter">
        <div class="counter-etapas">
            <div class="counter-etapas-etapa">
                <p class="counter-etapas-etapa-1">
                    1
                </p>
            </div>
            <div class="counter-etapas-etapa is-disable">
                <p class="counter-etapas-etapa-2">
                    2
                </p>
            </div>
            <div class="counter-etapas-etapa is-disable">
                <p class="counter-etapas-etapa-3">
                    3
                </p>
            </div>
            <div class="counter-etapas-etapa is-disable">
                <p class="counter-etapas-etapa-4">
                  4
                </p>
            </div>
        </div>
    </div>

    <form class="curriculo-form" action="/curriculo/formulario" method="post" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <div class="counter-etapas-content is-active">
        <?php echo $__env->make('curriculo.curriculo-etapa1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="counter-etapas-content">
        <?php echo $__env->make('curriculo.curriculo-etapa2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="counter-etapas-content">
        <?php echo $__env->make('curriculo.curriculo-etapa3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="counter-etapas-content">
        <?php echo $__env->make('curriculo.curriculo-etapa4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="curriculo-btn">
        <div id="btn-voltar" class="btn curriculo-btn-item is-disable">
            Voltar
        </div>
        <button id="btn-avancar" class="btn curriculo-btn-item">
            Avançar
        </button>
      </div>
    </form>

  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/curriculo/curriculo.blade.php ENDPATH**/ ?>