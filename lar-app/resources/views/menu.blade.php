<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">

        <a class="p-2 text-decoration-none link-secondary {{ request()->routeIs('index')?'font-colored':'' }}" href="{{ route('index') }}"><span class="font-nav">Главная</span></a>
        <a class="p-2 text-decoration-none link-secondary {{ request()->routeIs('about')?'font-colored':'' }}" href="{{ route('about') }}"><span class="font-nav">О нас</span></a>
        <a class="p-2 text-decoration-none link-secondary {{ request()->routeIs('news.category.index')?'font-colored':'' }}" href="{{ route('news.category.index') }}"><span class="font-nav">Категории</span></a>
        <a class="p-2 text-decoration-none link-secondary {{ request()->routeIs('news.index')?'font-colored':'' }}" href="{{ route('news.index') }}"><span class="font-nav">Лента новостей</span></a>

        @foreach($categories as $category)
            <a class="p-2 text-decoration-none link-secondary
        {{ request()->getRequestUri() == '/news/category/' . $category->slug ?'font-colored':'' }}"
               href="{{ route('news.category.show', $category->slug) }}">
                <span class="font-nav">{{ $category->title }}</span>
            </a>
        @endforeach
    </nav>
</div>

<a class="p-2 text-decoration-none link-secondary" href="{{ route('admin.index') }}"><span class="font-nav">Админ</span></a>

{{--d({{ request()->getRequestUri() == '/news/category/culture'?1:2 }});--}}

{{--d({{ request()->getRequestUri() }});--}}
