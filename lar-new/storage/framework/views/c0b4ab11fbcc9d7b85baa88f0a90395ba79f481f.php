<?php $__env->startSection('title'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?> Администрирование
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Администрирование</h1>
    </div>

<div class="btn-toolbar mb-2 mb-md-0">
    <a class="me-2" href="<?php echo e(route('admin.test1')); ?>">
        <button type="button" class="btn btn-sm btn-outline-secondary btn-width">Скачать JSON</button>
    </a>
    <a href="<?php echo e(route('admin.test2')); ?>">
        <button type="button" class="btn btn-sm btn-outline-secondary btn-width">Скачать IMAGE</button>
    </a>
</div>







<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/admin/index.blade.php ENDPATH**/ ?>