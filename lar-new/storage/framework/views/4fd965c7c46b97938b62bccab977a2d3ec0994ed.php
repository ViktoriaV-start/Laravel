<?php $__env->startSection('title'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?> Категории
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Категории</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="me-2" href="<?php echo e(route('admin.category.create')); ?>">
                <button type="button" class="btn btn-sm btn-outline-secondary btn-width">Добавить</button>
            </a>

        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th>Slug</th>
                    <th>Опции</th>
                </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->slug); ?></td>
                    <td>
                        <form action="<?php echo e(route('admin.category.destroy', $item)); ?>" method="post">

                            <a href="<?php echo e(route('admin.category.edit', $item)); ?>" class="font-colored nav-link p-0">Редактировать</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            
                            <button type="submit" class="btn-delete">Удалить</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="4">Нет записей</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/admin/allCategories.blade.php ENDPATH**/ ?>