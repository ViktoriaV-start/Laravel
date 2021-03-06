@extends('layouts.main_layout')

@section('title', 'Новости')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <main class="one-news container">


        @if (!$news->isPrivate)



            <h3 class="text-center mb-3">{{ $news->title ?? "" }}</h3>

            <img class="img-responsive img-circle img-left"
                 src="{{ asset('img/1.jpg') }}" alt="photo">
            <p class="h5">{{ $news->text ?? "" }}</p>
        @else
            <h2 class="title__h2">{{ $news->title ?? "" }}</h2>
            <img class="img-responsive img-circle img-left" src="{{ asset('img/1.jpg') }}" alt="photo">
            <p class="mt-2">Зарегистрируйтесь для просмотра</p>
        @endif


{{--        Альтернативный вариант:--}}

{{--        @if($news)--}}
{{--            <h2>{{ $news['title'] }}</h2>--}}
{{--            <p>{{ $news['text'] }}</p>--}}
{{--        @else--}}
{{--            <span>Некорректный запрос</span>--}}
{{--        @endif--}}

    </main>

@endsection


