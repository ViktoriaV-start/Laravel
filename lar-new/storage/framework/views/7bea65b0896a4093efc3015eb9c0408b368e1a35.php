<?php $__env->startSection('title'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?> Новости
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Новости</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="me-2" href="<?php echo e(route('admin.news.create')); ?>">
                <button type="button" class="btn btn-sm btn-outline-secondary btn-width">Добавить</button>
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Категория</th>
                <th>Заголовок</th>
                <th>Текст</th>
                <th>Ресурс</th>
                <th>Время</th>
                <th>Приватность</th>
                <th>Статус</th>
                <th>Опции</th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>

                    <td>
                        <?php $__currentLoopData = $categoriesTitle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($category->id == $item->category_id): ?>
                            <?php echo e($category->title); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>

                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo $item->text; ?></td>

                    <td>
                        <?php $__currentLoopData = $sourcesTitle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($source->id == $item->source_id): ?>
                                <?php echo e($source->title); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>

                    <td><?php echo e($item->created_at); ?>

                    </td>
                    <td><?php echo e(!$item->isPrivate ? 'открытая' : 'закрытая'); ?></td>
                    <td><?php echo e($item->status); ?></td>
                    <td>
                        <form action="<?php echo e(route('admin.news.destroy', $item)); ?>" method="post">

                            <a href="<?php echo e(route('admin.news.edit', $item)); ?>" class="font-colored nav-link p-0">Редактировать</a>
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
    <div class="mt-5"><?php echo e($news->links()); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/admin/allNews.blade.php ENDPATH**/ ?>