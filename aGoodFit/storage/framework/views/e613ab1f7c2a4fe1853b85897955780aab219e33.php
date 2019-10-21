<?php $__env->startSection('content'); ?>
<br>
<br>
<br>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">

                        </div>
                    <?php endif; ?>


                    Você tem uma sessao
                    e seu redirecionamento funcionou!
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/views/home.blade.php ENDPATH**/ ?>