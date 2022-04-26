<?php $__env->startSection('title', 'Новости'); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main class="one-news container">

        <?php if(!$news->isPrivate || Auth::id()): ?>
            <h3 class="text-center mb-3"><?php echo e($news->title ?? ""); ?></h3>

            <img class="img-responsive img-circle img-left"
                 src="<?php echo e(url($news->image ?? '')); ?>" alt="photo">
            <p class="h5 news-text"><?php echo $news->text ?? ""; ?></p>
            <p><?php echo $news->created_at ?? ""; ?></p>
        <?php else: ?>
            <h2 class="title__h2"><?php echo e($news->title ?? ""); ?></h2>
            <img class="img-responsive img-circle img-left" src="<?php echo e(url($news->image)); ?>" alt="photo">
            <p class="mt-2">Зарегистрируйтесь для просмотра</p>
        <?php endif; ?>











    </main>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/news/one.blade.php ENDPATH**/ ?>