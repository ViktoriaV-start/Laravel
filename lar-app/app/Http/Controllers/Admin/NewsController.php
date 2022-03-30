<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function create(Request $request, Category $categories)
    {
        if ($request->isMethod('post')) {
            $request->flash(); // метод фиксирует все данные от пользователя (сохраняются в одноразовую сессию),

            $arr = $request->except(['_token']);

//!isset($arr['isPrivate'])?0:1);

            $id=DB::table('news')->insertGetId(
                [
                    'category_id' => $arr['category_id'],
                    'title' => $arr['title'],
                    'status' => $arr['status'],
                    'text' => $arr['text'],
                    'isPrivate' => !isset($arr['isPrivate'])?0:1
                ]
            );

            return redirect()->route('news.one', $id)->with('success', 'Новость успешно добавлена');
        }

        return view('admin.news.create', [
            'categories' => $categories->getCategories()
        ]);
    }

    public function edit()
    {
        return view('admin.news.edit');
    }
}
