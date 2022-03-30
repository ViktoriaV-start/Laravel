@extends('layouts.admin')

@section('title', 'Редактировать новости')


{{--@section('menu')--}}
{{--    @include('menu')--}}
{{--@endsection--}}

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать новости</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary btn-width">Редактировать</button>
            </div>
        </div>
    </div>

@endsection
