<?php $__env->startSection('title'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?> Главная
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <main>
        <h1>Новостной сайт Ньюс Лайн</h1>
        <h3>Главная</h3>
        <div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/index.blade.php ENDPATH**/ ?>