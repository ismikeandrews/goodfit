<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, user-scalable=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title>GoodFit</title>

  <link href="<?php echo e(asset('css/reset.css')); ?>" rel="stylesheet">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <!-- Styles -->
  <link href="<?php echo e(asset('css/croppie.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/fonts.css')); ?>" rel="stylesheet">
</head>
<body>
  <div id="app">
      <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
      <?php echo $__env->yieldContent('content'); ?>
    </main>
  </div>

  <!-- Scripts -->
  <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.mask.js')); ?>" defer></script>
  <script src="<?php echo e(asset('js/upload-img.js')); ?>" defer></script>
  <script src="<?php echo e(asset('js/mascaras.js')); ?>" defer></script>
  <script src="<?php echo e(asset('js/croppie.js')); ?>" defer></script>
  <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/layouts/app.blade.php ENDPATH**/ ?>