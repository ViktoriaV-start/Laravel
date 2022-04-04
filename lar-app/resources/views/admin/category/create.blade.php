@extends('layouts.admin')

@section('title', 'Добавить категории')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Добавить категорию</h1>
    </div>

    <form method="POST" action="{{ route('admin.category.store') }}">
        @csrf

        <div class="form-group row mb-3">
            <label for="categoryTitle" class="col-md-2 col-form-label text-md-end">Название категории</label>

            <div class="col-md-8">
                <input id="categoryTitle" type="text" class="form-control" name="title" value="{{ old('title') }}" autofocus>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="categorySlug" class="col-md-2 col-form-label text-md-end">Slug</label>

            <div class="col-md-8">
                <input id="categorySlug" type="text" class="form-control" name="slug" value="{{ old('slug') }}" autofocus>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2 offset-md-2">
                    <button type="submit" class="btn btn-sm btn-outline-secondary btn-colored shadow-sm">Добавить категорию</button>
                </div>
            </div>
        </div>
    </form>

@endsection



