<?php $__env->startSection('content'); ?>
<br>
<br>
<br>
Editar o curriculo
<br>
<?php echo e($curriculo->videoCurriculo); ?>

<br>
<?php echo e($curriculo->descricaoCurriculo); ?>

<?php $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php echo e($cargo->codCategoria); ?>

  <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<br>
<?php $__currentLoopData = $adicionais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adicional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php echo e($adicional->codAdicional); ?>

  <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/curriculo/editarCurriculo.blade.php ENDPATH**/ ?>