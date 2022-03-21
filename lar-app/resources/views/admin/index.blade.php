@extends('layouts.admin')
{{--расширяет главный layout, который находится по указанному пути--}}

@section('title')
  @parent Администрирование
@endsection


@section('content')
{{--    передать в главный layout сам контент--}}

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Администрирование</h1>
      </div>
@endsection
