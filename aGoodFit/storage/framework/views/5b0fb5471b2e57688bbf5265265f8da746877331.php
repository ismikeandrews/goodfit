<div class="curriculo-title">
    Habilidades
</div>
<div class="curriculo-desc">
    Eu sou bom com<span>...</span>
</div>
<div class="curriculo-etapa3">
    <?php $__currentLoopData = $habilidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $habilidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="curriculo-content-item">
          <input value="<?php echo e($habilidade->codAdicional); ?>" type="checkbox" id="habilidade-<?php echo e($habilidade->nomeAdicional); ?>" class="curriculo-checkbox" name="habilidades[]"/>
            <label class="curriculo-content-item-label" for="habilidade-<?php echo e($habilidade->nomeAdicional); ?>">
                <img src='<?php echo e(asset("images/icones/habilidades/$habilidade->imagemAdicional")); ?>' alt="Habilidades - Bom com <?php echo e($habilidade->nomeAdicional); ?>" class="curriculo-content-item-label-icon">
                <p class="curriculo-content-item-label-desc">
                    <?php echo e($habilidade->nomeAdicional); ?>

                </p>
            </label>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/curriculo/curriculo-etapa3.blade.php ENDPATH**/ ?>