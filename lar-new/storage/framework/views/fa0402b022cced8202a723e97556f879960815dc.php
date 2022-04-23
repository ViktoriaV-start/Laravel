<?php $__env->startSection('title'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?> Пользователи
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Зарегистрированные пользователи</h1>
    </div> 

 



    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>id</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Email</th>
                <th>Права администратора</th>
                
                <th>Удалить пользователя</th>
                </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->surname); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td class="<?php echo e($item->is_admin ? 'font-colored' : ''); ?> ">
                        <?php echo e($item->is_admin ? 'администратор' : 'пользователь'); ?>


                        <?php if(!$item->is_admin): ?>

                        <form method="POST" action="<?php echo e(route('admin.user.update', $item)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php if($item->id): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

                        <button class="btn-special">
                            Добавить права администратора</button>
                        </form>

                        <?php endif; ?>

                        <?php if($item->is_admin ): ?>

                        <form method="POST" action="<?php echo e(route('admin.user.update', $item)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php if($item->id): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

                        <button class="btn-delete">
                            Удалить права администратора</button>
                        </form>

                        <?php endif; ?>
                        
                    </td>

                    <td>
                    <form action="<?php echo e(route('admin.user.destroy', $item)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <?php if(!$item->is_admin ): ?>
                        <button type="submit" class="btn-delete">Удалить</button>
                    <?php endif; ?>    
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/admin/allUsers.blade.php ENDPATH**/ ?>