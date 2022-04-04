<!DOCTYPE html>
<html lang="ru" class="h-100">

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>@section('title')News Line | @show</title>--}}

{{--    <link rel="preconnect" href="https://fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">--}}

{{--    <link rel="stylesheet" href="{{ asset('css/norm.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

{{--</head>--}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@section('title')News Line | @show</title>

    <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
                color: #159bca;
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

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

    <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
        <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    </head>

    <body class="d-flex flex-column h-100">

        <div class="custom-bg shadow-sm">
            <header class="blog-header py-3 container">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="link-secondary font-nav" href="#">Подписаться</a>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-dark" href="{{ route('index') }}">Ньюс Лайн</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="link-secondary" href="#" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                        </a>

                        <a class="btn btn-sm btn-outline-secondary font-nav" href="{{ route('login') }}">Войти</a>

                    </div>

                </div>
            </header>
        </div>

        <div class="container">
            @yield('menu')
            @yield('content')
        </div>
        <footer class="footer mt-auto py-3 bg-footer">
    <div class="container">
        <span class="text-muted">&copy 2022 "Ньюс Лайн". Все права защищены.</span>
    </div>
</footer>
    </body>
</html>
