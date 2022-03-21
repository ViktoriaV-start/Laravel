<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(News $news) {

// в обычном случае без Laravel было бы необходимо создавать новый экземпляр
// класса News(модель), например, здесь : $news = new News(); - это жесткая зависимость, привязанность к экземпляру
// Но Laravel дает возможность создавать и передавать экзепляр снаружи (инверсия зависимости) -
// для этого такая запись: public function index(News $news) {

        return view('news.index')->with('news', $news->getNews());
        //news.index - здесь запись папка.имяФайла
        // Отобразить вьюху, путь к которому: views/news/index,
        // и передать туда (в шаблон) переменную $news->getNews() - это будет массив, в которую загрузили данные из класса News
        // В шаблоне эта переменная будет доступна как $news. То есть ->with('имя_переменной_в_шаблоне', $наша_текущая переменная)
    }

    public function show(News $news, int $id) {


        return view('news.one')->with('news', $news->getNewsId($id));
    }

    public function showList(News $news) {
//        $news = News::getNewsId($id);
//dd($category);
        return view('news.category')->with('news', $news);
    }
}
