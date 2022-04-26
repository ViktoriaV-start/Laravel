<?php $__env->startSection('title', 'Категории'); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="one-news container">
        
        <h2 class="title__h2"><?php echo e($category ?? ""); ?></h2>

        <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a class="text-decoration-none link-secondary" href="<?php echo e(route('news.one', $item->id)); ?>" class="news-line__href">
                <p class="h4"><?php echo e($item->title); ?></p>
            </a>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Нет новостей</p>
        <?php endif; ?>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/news/category.blade.php ENDPATH**/ ?>