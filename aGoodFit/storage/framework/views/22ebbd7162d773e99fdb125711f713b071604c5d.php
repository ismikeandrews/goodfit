<div class="container container-requisitos">
    <div class="curriculo-title">
        Requisitos
      </div>
    <div class="curriculo-desc">
       Formações básicas em<span>...</span>
    </div>

    <div class="curriculo-etapa2">

        <div class="curriculo-content-item curriculo-content-item-etapa-2" id="requisito-escolaridade">
            <div class="curriculo-select-arrow">
                <div class="curriculo-select js-curriculo-parent">
                  <label class="curriculo-content-item-label curriculo-select-box">
                      <img src='<?php echo e(asset("images/icones/requisitos/escolaridade.png")); ?>' alt="Requisito - Nível de escolaridade" class="curriculo-content-item-label-icon curriculo-select-box-icon">
                      <div class="curriculo-select-content js-curriculo-text">
                        Escolaridade
                      </div>
                  </label>

                  <div class="curriculo-select-list js-curriculo-list">
                    <div class="curriculo-select-list-content js-curriculo-list-content">
                      <?php $__currentLoopData = $escolaridades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $escolaridade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div data-value="<?php echo e($escolaridade->codAdicional); ?>" class="curriculo-select-list-item js-curriculo-list-item">
                            <?php echo e($escolaridade->nomeAdicional); ?>

                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                </div>
            </div>
        </div>


        <div class="curriculo-content-item curriculo-content-item-etapa-2" id="requisito-alfabetizacao">
            <div class="curriculo-select-arrow">
                <div class="curriculo-select js-curriculo-parent">
                  <label class="curriculo-content-item-label curriculo-select-box">
                      <img src='<?php echo e(asset("images/icones/requisitos/alfabetizacao.png")); ?>' alt="Requisito - Nível de alfabetização" class="curriculo-content-item-label-icon curriculo-select-box-icon">
                      <div class="curriculo-select-content js-curriculo-text">
                        Alfabetização
                      </div>
                  </label>

                  <div class="curriculo-select-list js-curriculo-list">
                    <div class="curriculo-select-list-content js-curriculo-list-content">
                      <?php $__currentLoopData = $alfabetizacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alfabetizacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div data-value="<?php echo e($alfabetizacao->codAdicional); ?>" class="curriculo-select-list-item js-curriculo-list-item">
                            <?php echo e($alfabetizacao->nomeAdicional); ?>

                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/curriculo/curriculo-etapa2.blade.php ENDPATH**/ ?>