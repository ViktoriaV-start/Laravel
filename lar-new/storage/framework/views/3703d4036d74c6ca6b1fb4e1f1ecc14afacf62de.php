<?php $__env->startSection('title', 'Редактировать ресурс'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать ресурс</h1>
    </div>

    <?php if(session('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('error')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('admin.source.update', $source)); ?>">
        <?php echo csrf_field(); ?>
        <?php if($source->id): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

        <div class="form-group row mb-3">
            <label for="$sourceTitle" class="col-md-2 col-form-label text-md-end">Название ресурса</label>

            <div class="col-md-8">
                <input id="$sourceTitle" type="text" class="form-control" name="title" value="<?php echo e($source->title); ?>" autofocus>
            </div>
            
            <?php if($errors->has('title')): ?>
                <div class="col-md-8 me-2 offset-md-2 alert alert-danger mt-3" role="alert">
                    <?php $__currentLoopData = $errors->get('title'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group row mb-3">
            <label for="sourceLink" class="col-md-2 col-form-label text-md-end">Адрес ресурса</label>

            <div class="col-md-8">
                <input id="sourceLink" type="text" class="form-control" name="source" value="<?php echo e($source->source); ?>" autofocus>
            </div>
            
            <?php if($errors->has('source')): ?>
                <div class="col-md-8 me-2 offset-md-2 alert alert-danger mt-3" role="alert">
                    <?php $__currentLoopData = $errors->get('source'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group row mb-0">
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2 offset-md-2">
                    <button type="submit" class="btn btn-sm btn-outline-secondary btn-colored shadow-sm">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/admin/source/edit.blade.php ENDPATH**/ ?>