@extends('layouts.admin')

@section('title')
    @parent Новости
@endsection

@section('content')
    {{--    передать в главный layout сам контент--}}

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Новости</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="me-2" href="{{ route('admin.news.create') }}">
                <button type="button" class="btn btn-sm btn-outline-secondary btn-width">Добавить</button>
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Категория</th>
                <th>Заголовок</th>
                <th>Текст</th>
                <th>Время</th>
                <th>Приватность</th>
                <th>Статус</th>
                <th>Опции</th>
            </tr>
            </thead>
            <tbody>
            @forelse($news as $item)
                <tr>
                    <td>{{ $item->id }}</td>

                    <td>
                        @foreach($categoriesTitle as $category)
                            @if ($category->id == $item->category_id)
                            {{ $category->title }}
                            @endif
                        @endforeach
                    </td>

                    <td>{{ $item->title }}</td>
                    <td>{{ $item->text }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ !$item->isPrivate ? 'открытая' : 'закрытая' }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <form action="{{ route('admin.news.destroy', $item) }}" method="post">

                            <a href="{{ route('admin.news.edit', $item) }}" class="font-colored nav-link p-0">Редактировать</a>
                            @csrf
                            @method('DELETE')
{{--                            // скрытый инпут с именем _method и значением DELETE--}}
                            <button type="submit" class="btn-delete">Удалить</button>
                        </form>
                    </td>
                </tr>

            @empty
                <tr><td colspan="4">Нет записей</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-5">{{ $news->links() }}</div>
@endsection
