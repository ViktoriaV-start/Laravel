<?php $__env->startSection('title', 'Редактировать новости'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать новость</h1>
    </div>

    <?php if(session('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('error')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('admin.news.update', $news)); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php if($news->id): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

        <div class="form-group row mb-3">
            <label for="title" class="col-md-2 col-form-label text-md-end">Заголовок</label>

            <div class="col-md-8">
                <input id="title" type="text" class="form-control" name="title" value="<?php echo e($news->title); ?>" autofocus>
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
            <label for="category" class="col-md-2 col-form-label text-md-end">Категория новости</label>
            <div class="col-md-8">
                <select class="form-select" name="category_id" id="category">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option

                            <?php if($item->id == $news->category_id): ?>
                            selected
                            <?php endif; ?>

                            value="<?php echo e($item->id); ?>">

                            <?php echo e($item->title); ?>


                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
            <?php if($errors->has('category_id')): ?>
                <div class="col-md-8 me-2 offset-md-2 alert alert-danger mt-3" role="alert">
                    <?php $__currentLoopData = $errors->get('category_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group row mb-3">
            <label for="status" class="col-md-2 col-form-label text-md-end">Статус</label>
            <div class="col-md-8">
                <select class="form-select" name="status" id="status">
                    <option <?php if($news->status === 'active'): ?> selected <?php endif; ?> value="active">active</option>
                    <option <?php if($news->status === 'blocked'): ?> selected <?php endif; ?> value="blocked">blocked</option>
                    <option <?php if($news->status === 'blocked'): ?> selected <?php endif; ?> value="blocked">draft</option>
                </select>
            </div>
            <?php if($errors->has('status')): ?>
                <div class="col-md-8 me-2 offset-md-2 alert alert-danger mt-3" role="alert">
                    <?php $__currentLoopData = $errors->get('status'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group row mb-3">
            <label for="editor" class="col-md-2 col-form-label text-md-end">Текст новости</label>
            <div class="col-md-8">
                <textarea id="editor" type="text" class="form-control" name="text"><?php echo $news->text; ?></textarea>
            </div>
            <?php if($errors->has('text')): ?>
                <div class="col-md-8 me-2 offset-md-2 alert alert-danger mt-3" role="alert">
                    <?php $__currentLoopData = $errors->get('text'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group row mb-3">
            <label for="newsPrivate" class="col-md-2 col-form-label text-md-end">Приватная</label>
            <div class="col-md-1">
                <input class="form-check-input mt-0-6"
                       <?php if($news->isPrivate == 1): ?> checked <?php endif; ?>
                       name="isPrivate" type="checkbox" value="1" id="newsPrivate">
            </div>
            <?php if($errors->has('isPrivate')): ?>
                <div class="col-md-8 me-2 offset-md-2 alert alert-danger mt-3" role="alert">
                    <?php $__currentLoopData = $errors->get('isPrivate'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group row mb-3">
            <label for="image" class="col-md-2 col-form-label text-md-end">Добавить изображение</label>
            <div class="col-md-1">
                <input type="file" name="image">
            </div>
            <?php if($errors->has('image')): ?>
                <div class="col-md-8 me-2 offset-md-2 alert alert-danger mt-3" role="alert">
                    <?php $__currentLoopData = $errors->get('image'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->startPush('js'); ?>





<script src="<?php echo e(asset('ckeditor5-build-classic/ckeditor.js')); ?>"></script>

<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='

    };
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/admin/news/edit.blade.php ENDPATH**/ ?>