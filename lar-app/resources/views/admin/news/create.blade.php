@extends('layouts.admin')

@section('title', 'Добавить категории')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Добавить новость</h1>
    </div>
{{--    <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--        Новость успешно загружена--}}
{{--        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--    </div>--}}

    <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row mb-3">
            <label for="title" class="col-md-2 col-form-label text-md-end">Заголовок</label>

            <div class="col-md-8">
                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" autofocus>
            </div>

        </div>

        <div class="form-group row mb-3">
            <label for="category" class="col-md-2 col-form-label text-md-end">Категория новости</label>
            <div class="col-md-8">
                <select class="form-select" name="category_id" id="category">
                    @foreach($categories as $item)

                    <option

                    @if ($item->id == old('category'))
                        selected
                    @endif

                    value="{{ $item->id }}">

                        {{ $item->title }}

                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="status" class="col-md-2 col-form-label text-md-end">Статус</label>
            <div class="col-md-8">
                <select class="form-select" name="status" id="status">
                    <option @if(old('status') === 'active') selected @endif value="active">active</option>
                    <option @if(old('status') === 'blocked') selected @endif value="blocked">blocked</option>
                    <option @if(old('status') === 'blocked') selected @endif value="blocked">draft</option>
                </select>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="newsText" class="col-md-2 col-form-label text-md-end">Текст новости</label>
            <div class="col-md-8">
                <textarea id="newsText" type="text" class="form-control" name="text">{{ old('text') }}</textarea>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="newsPrivate" class="col-md-2 col-form-label text-md-end">Приватная</label>
            <div class="col-md-1">
                <input class="form-check-input mt-0-6"
                       @if (old('isPrivate')) checked @endif
                       name="isPrivate" type="checkbox" value="1" id="newsPrivate">
            </div>

        </div>

        <div class="form-group row mb-3">
            <label for="image" class="col-md-2 col-form-label text-md-end">Добавить изображение</label>
            <div class="col-md-1">
                <input type="file" name="image">
            </div>

        </div>

        <div class="form-group row mb-0">
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2 offset-md-2">
                    <button type="submit" class="btn btn-sm btn-outline-secondary btn-colored shadow-sm">Добавить новость</button>
                </div>
            </div>
        </div>

    </form>
@endsection
