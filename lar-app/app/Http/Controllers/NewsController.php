<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index() {

        //$news = DB::select('SELECT * FROM `news` WHERE 1'); - ВОЗВРАЩАЕТ ОБЪЕКТ-КОЛЛЕКЦИЮ, ЭТО НЕ МАССИВ
        $news = DB::table('news')->get(); //getAll
        return view('news.index')->with('news', $news);

    }

    public function show(int $id)
        {

            //$news = DB::select('SELECT * FROM `news` WHERE id = :id', ['id' => $id]);
            $news = DB::table('news')->find($id); //getOne($id)

            return view('news.one')->with('news', $news);
        }



    public function showList(News $news) {
        return view('news.category')->with('news', $news);
    }
}
