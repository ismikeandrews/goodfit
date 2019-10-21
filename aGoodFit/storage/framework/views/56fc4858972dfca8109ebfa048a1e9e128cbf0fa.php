<div class="curriculo-title">
    Objetivo profissional
  </div>
  <div class="curriculo-desc">
    Gostaria de trabalhar com<span>...</span>
  </div>
  <div class="curriculo-etapa4">
    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="curriculo-content-item">
        <input value="<?php echo e($categoria->codCategoria); ?>" type="checkbox" id="objetivo-<?php echo e($categoria->nomeCategoria); ?>" class="curriculo-checkbox" name="categorias[]"/>
        <label class="curriculo-content-item-label" for="objetivo-<?php echo e($categoria->nomeCategoria); ?>">
          <img src='<?php echo e(asset("images/icones/profissao/$categoria->imagemCategoria")); ?>' alt="Objetivo Profissional - <?php echo e($categoria->nomeCategoria); ?>" class="curriculo-content-item-label-icon">
          <p class="curriculo-content-item-label-desc">
            <?php echo e($categoria->nomeCategoria); ?>

          </p>
        </label>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
<?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/curriculo/curriculo-etapa4.blade.php ENDPATH**/ ?>