@extends('layouts.main_layout')

@section('title', 'Новости')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <main class="one-news container">


        <h2 class="title__h2">{{ $news['title'] ?? "" }}</h2>
        <p>{{ $news['text'] ?? "" }}</p>

{{--        Альтернативный вариант:--}}

{{--        @if($news)--}}
{{--            <h2>{{ $news['title'] }}</h2>--}}
{{--            <p>{{ $news['text'] }}</p>--}}
{{--        @else--}}
{{--            <span>Некорректный запрос</span>--}}
{{--        @endif--}}

    </main>

@endsection
