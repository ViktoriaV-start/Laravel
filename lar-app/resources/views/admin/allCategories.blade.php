@extends('layouts.admin')
{{--расширяет главный layout, который находится по указанному пути--}}

@section('title')
    @parent Категории
@endsection


@section('content')
    {{--    передать в главный layout сам контент--}}

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Категории</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="me-2" href="{{ route('admin.category.create') }}">
                <button type="button" class="btn btn-sm btn-outline-secondary btn-width">Добавить</button>
            </a>
            <a href="{{ route('admin.category.edit') }}">
                <button type="button" class="btn btn-sm btn-outline-secondary btn-width">Редактировать</button>
            </a>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th>Slug</th>
                    <th>Опции</th>
                </tr>
            </thead>
            <tbody>
            @forelse($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->slug }}</td>
                    <td><a href="{{ route('admin.category.edit') }}" class="me-3">Редактировать</a>
                        <a href="javascript:;" style="color:red;">Удалить</a>
                    </td>
                </tr>

            @empty
                <tr><td colspan="4">Нет записей</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
