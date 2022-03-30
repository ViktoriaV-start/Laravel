<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $categories = DB::table('categories')->get(); //getAll
        return view('admin.allCategories')->with('categories', $categories);
    }

    public function news()
    {
        $news = DB::table('news')
                ->join('categories', 'categories.id', '=', 'news.category_id')
                ->select('news.*', 'categories.title as category_title' )
                ->orderBy('id')
                ->get();

        return view('admin.allNews')->with('news', $news);
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
