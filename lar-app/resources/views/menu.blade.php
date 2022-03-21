<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">

        <a class="p-2 link-secondary" href="{{ route('index') }}"><span class="font-nav">Главная</span></a>
        <a class="p-2 link-secondary" href="{{ route('about') }}"><span class="font-nav">О нас</span></a>
        <a class="p-2 link-secondary" href="{{ route('news.category.index') }}"><span class="font-nav">Категории</span></a>
        <a class="p-2 link-secondary" href="{{ route('news.index') }}"><span class="font-nav">Лента новостей</span></a>
        <a class="p-2 link-secondary" href="{{ route('news.category.show', 'world') }}"><span class="font-nav">Мир</span></a>
        <a class="p-2 link-secondary" href="{{ route('news.category.show', 'business') }}"><span class="font-nav">Бизнес</span></a>
        <a class="p-2 link-secondary" href="#"><span class="font-nav">Политика</span></a>
        <a class="p-2 link-secondary" href="{{ route('news.category.show', 'sport') }}"><span class="font-nav">Спорт</span></a>
        <a class="p-2 link-secondary" href="{{ route('news.category.show', 'culture') }}"><span class="font-nav">Культура</span></a>


    </nav>
</div>

<a class="p-2 link-secondary" href="{{ route('admin.index') }}"><span class="font-nav">Админ</span></a>

