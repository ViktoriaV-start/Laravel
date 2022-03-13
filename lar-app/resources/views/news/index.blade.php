@extends('layouts.main_layout')

@section('title', 'Лента новостей')



@section('menu')
    @include('menu')
@endsection

@section('content')

    <main class="news-line container">
    <h1 class="title__h1">Новостной сайт Ньюс-Лайн</h1>
    <h3 class="title__h3">Лента новостей</h3>

    @forelse($news as $item)
        <a href="{{ route('one', $item['id']) }}" class="news-line__href"><h3 class="title__h3 news-line__item">{{ $item['title'] }}</h3></a>

    @empty
        <p>Нет новостей</p>
    @endforelse

    </main>
@endsection

{{--    <?php foreach ($news as $item): ?>--}}
{{--    <a href="<?=route('one', $item['id'])?>"><h3><?=$item['title']?></h3></a>--}}
{{--    <?php endforeach;?>--}}
{{--    Заменили foreach синтаксисом blade:  <?php  ?>/ <?= foreach ($news as $item): ?> меняем на {{  }}--}}




