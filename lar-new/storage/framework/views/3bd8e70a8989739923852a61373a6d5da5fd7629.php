<!DOCTYPE html>
<html lang="ru" class="h-100">













    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php $__env->startSection('title'); ?>News Line | <?php echo $__env->yieldSection(); ?></title>

    <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            .custom-bg {
                background-color: lightblue;
            }
            /*#cfe2ff*/

            .bg-footer {
                background-color: rgba(240, 244, 248, 0.95);
            }

            .font-colored {
                color: #5EA2B9FF;
            }

            .font-nav {
                font-size: 18px;
            }

            .category__item:hover {
                color: #5EA2B9FF;
            }

            .custom-mrg {
                margin-top: 3rem;
            }

            .img-left {
                margin: 0 20px 10px 0;
                padding: 0;
                float: left;
            }

            .btn-auth:hover {
                fill: #135fcf;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

    <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
        <link href="<?php echo e(asset('css/blog.css')); ?>" rel="stylesheet">
    </head>

    <body class="d-flex flex-column h-100">



            <nav class="navbar navbar-expand-md navbar-light shadow-sm custom-bg">
                <div class="container">
                    <div class="col-4 pt-1">
                        <a class="link-secondary" href="#" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                        </a>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-dark" href="<?php echo e(route('index')); ?>">Ньюс Лайн</a>
                    </div>





                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->

                            <?php if(auth()->guard()->guest()): ?>
                                <?php if(Route::has('login')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Войти')); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if(Route::has('register')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Регистрация')); ?></a>
                                    </li>
                                <?php endif; ?>

                            <?php else: ?>
                                <img src="<?php echo e(Auth::User()->avatar); ?>" width="40" alt="">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false" v-pre>
                                        <?php echo e(Auth::user()->name); ?>

                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo e(route('updateProfile')); ?>">
                                            <?php echo e(__('Профиль')); ?>

                                        </a>

                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Выход')); ?>

                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>

        <div class="container">
            <?php echo $__env->yieldContent('menu'); ?>


            <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo e(session('error')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <footer class="footer mt-auto py-3 bg-footer">
    <div class="container">
        <span class="text-muted">&copy 2022 "Ньюс Лайн". Все права защищены.</span>
    </div>
</footer>

    </body>
</html>
<?php /**PATH /home/vagrant/code/resources/views/layouts/main_layout.blade.php ENDPATH**/ ?>