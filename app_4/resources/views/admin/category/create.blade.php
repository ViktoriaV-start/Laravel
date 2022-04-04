@extends('layouts.admin')

@section('title', 'Добавить категории')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Добавить категорию</h1>
    </div>

    <form method="POST" action="{{ route('admin.category.create') }}">


        <div class="form-group row mb-3">
            <label for="newsTitle" class="col-md-2 col-form-label text-md-end">Название категории</label>

            <div class="col-md-8">
                <input id="newsTitle" type="text" class="form-control" name="title" value="" autofocus>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2 offset-md-2">
                    <button type="submit" class="btn btn-sm btn-outline-secondary btn-width shadow-sm">Добавить</button>
                </div>
            </div>
        </div>




    </form>

@endsection



