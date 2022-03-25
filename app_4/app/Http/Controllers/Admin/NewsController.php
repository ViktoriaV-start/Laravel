<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create(Request $request, Categories $categories)
    {
        if ($request->isMethod('post')) {
            $request->flash(); // метод фиксирует все данные от пользователя (сохраняются в одноразовую сессию),

            //dump($request->except(['_token']));

//  return redirect()->route('admin.news.create'); // редирект (аналог header)
// сохранение flash срабатывает и без этой строчки
        }
//        dump($request->old());
        return view('admin.news.create', [
            'categories' => $categories->getCategories()
        ]);
    }


    public function edit()
    {
        return view('admin.news.edit');
    }
}
