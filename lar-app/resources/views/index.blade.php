@extends('layouts.main_layout')
{{--расширяет главный layout, который находится по указанному пути--}}

@section('title')
    @parent Главная
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
{{--    передать в главный layout сам контент--}}
    <main class="title container">
        <h1 class="title__h1">Новостной сайт Ньюс Лайн</h1>
        <h3 class="title__h3">Главная</h3>
    </main>

@endsection
{{--окончание секции--}}
