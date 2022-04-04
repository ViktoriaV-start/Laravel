@extends('layouts.admin')

@section('title', 'Редактировать категории')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать категорию</h1>
    </div>

    <form method="POST" action="{{ route('admin.category.update', $category) }}">
        @csrf
        @if ($category->id) @method('PUT') @endif

        <div class="form-group row mb-3">
            <label for="categoryTitle" class="col-md-2 col-form-label text-md-end">Название категории</label>

            <div class="col-md-8">
                <input id="categoryTitle" type="text" class="form-control" name="title" value="{{ $category->title }}" autofocus>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="categorySlug" class="col-md-2 col-form-label text-md-end">Slug</label>

            <div class="col-md-8">
                <input id="categorySlug" type="text" class="form-control" name="slug" value="{{ $category->slug }}" autofocus>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2 offset-md-2">
                    <button type="submit" class="btn btn-sm btn-outline-secondary btn-colored shadow-sm">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </form>

@endsection
