<?php $__env->startSection('title'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?> О нас
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="about container">
        <h1 class="title__h1">Новостной сайт Ньюс Лайн</h1>
        <h4 class="title__h3">О сайте</h4>

        <div class="alert alert-danger alert-dismissible fade show d-none" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <h3 class="title__h3 mt-5 mb-3">Форма обратной связи</h3>
        <form method="POST" action="<?php echo e(route('about')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group row mb-3">
                <label for="name" class="col-md-2 col-form-label text-md-start">Имя</label>

                <div class="col-md-8">
                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" autofocus required>
                </div>

            </div>

            <div class="form-group row mb-3">
                <label for="surname" class="col-md-2 col-form-label text-md-start">Фамилия</label>

                <div class="col-md-8">
                    <input id="surname" type="text" class="form-control" name="surname" value="<?php echo e(old('surname')); ?>">
                </div>

            </div>

            <div class="form-group row mb-3">
                <label for="mail" class="col-md-2 col-form-label text-md-start">Адрес электронной почты</label>

                <div class="col-md-8">
                    <input id="mail" type="text" class="form-control" name="mail" value="<?php echo e(old('mail')); ?>" required placeholder=" Введите адрес электронной почты">
                    <span class="font-colored <?php echo e($mailWarn); ?>"><?php echo e($message); ?></span>
                </div>

            </div>

            <div class="form-group row mb-3">
                <label for="comment" class="col-md-2 col-form-label text-md-start">Комментарий</label>
                <div class="col-md-8">
                    <textarea id="comment" type="text" class="form-control" name="comment" required><?php echo e(old('comment')); ?></textarea>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2 offset-md-2">
                        <button type="submit" class="btn btn-sm btn-outline-secondary btn-width shadow-sm">Добавить</button>
                    </div>
                </div>
            </div>

        </form>

        <span class="font-colored <?php echo e($done); ?>">Комментарий отправлен </span>

    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/about.blade.php ENDPATH**/ ?>