<?php $__env->startSection('title', 'Категории'); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="container">
        <nav class="nav flex-column">
            <h3>Новости по категориям</h3>

            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <a class="text-decoration-none text-reset" href="<?php echo e(route('news.category.show', $category->slug)); ?>" class="nav-link">
                    <h4 class="text-decoration-none link-secondary"><?php echo e($category->title); ?></h4>
                </a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                Нет категорий
            <?php endif; ?>
        </nav>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/news/categories.blade.php ENDPATH**/ ?>