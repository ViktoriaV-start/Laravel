@extends('layouts.main_layout')

@section('title', 'Категории')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <main class="one-news container">
        <h1 class="title__h1">Новостной сайт Ньюс Лайн</h1>

        <h2 class="title__h2">{{ $category['title'] ?? "" }}</h2>

        @forelse($news as $item)
            <a href="{{ route('one', $item['id']) }}" class="news-line__href"><h3 class="title__h3 news-line__item">{{ $item['title'] }}</h3></a>

        @empty
            <p>Нет новостей</p>
        @endforelse

    </main>

@endsection
