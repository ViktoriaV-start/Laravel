<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')News Line | @show</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/norm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

<div class="wrap">
    <header class = "header__wrapper">
        <div class="header container">
            <a href="#" class="header__logo"></a>
            <span class="header__title">НЬЮС ЛАЙН - ТОЛЬКО НОВОСТИ</span>
    </div>
    </header>

    @yield('menu')
    @yield('content')
</div>
<footer class="footer"></footer>



</body>

</html>
