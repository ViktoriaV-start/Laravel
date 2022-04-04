<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('admin.index');
    }


    // получение данных в виде JSON
    public function test1(News $news) {
        return response()->json($news->getNews())
            ->header('Content-Disposition', 'attachment; filename = "json.txt"') // для скачивания
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); // для отображения в браузере
    }
// скачать картинку
    public function test2() {
        return response()->download('img/4.jpg'); // скачать картинку

    }

    public function categories()
    {
        return view('admin.allCategories');
    }

    public function news()
    {
        return view('admin.allNews');
    }





    public function categoryAdd()
    {
        return view('admin.category.add');
    }

    public function categoryUpdate()
    {
        return view('admin.category.update');
    }

    public function newsAdd()
    {
        return view('admin.news.add');
    }

    public function newsUpdate()
    {
        return view('admin.news.update');
    }


}
