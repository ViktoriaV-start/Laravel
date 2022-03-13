@extends('layouts.main_layout')

@section('title')
    @parent О нас
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <main class="about container">
        <h1 class="title__h1">Новостной сайт Ньюс Лайн</h1>
        <h4 class="title__h3">О сайте</h4>
        <p class="text">Информация</p>
    </main>
@endsection

