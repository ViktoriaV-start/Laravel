<div class="menu">
    <a href="<?=route('home')?>" class="menu__href"><span class="menu__item">Главная</span></a>
    <a href="<?=route('about')?>" class="menu__href"><span class="menu__item">О нас</span></a>
    <a href="<?=route('news')?>" class="menu__href"><span class="menu__item">Лента новостей</span></a>
    <a href="<?=route('news.category', 'world')?>" class="menu__href"><span class="menu__item">Мир</span></a>
    <a href="<?=route('news.category', 'business')?>" class="menu__href"><span class="menu__item">Бизнес</span></a>
    <a href="<?=route('news.category', 'sport')?>" class="menu__href"><span class="menu__item">Спорт</span></a>
    <a href="<?=route('news.category', 'culture')?>" class="menu__href"><span class="menu__item">Культура</span></a>
    <a href="<?=route('admin.index')?>" class="menu__href"><span class="menu__item">Админ</span></a>
<!--Здесь заданное имя-альяс admin.index для роута, где оно будет разбито на префикс.имя-->
<!--<a href="--><?//=route('one', $item['id'])?><!--"><h3>--><?//=$item['title']?><!--</h3></a>-->
</div>
