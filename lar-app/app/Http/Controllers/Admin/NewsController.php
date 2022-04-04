<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index() {
//        $news = DB::table('news')
//            ->join('categories', 'categories.id', '=', 'news.category_id')
//            ->select('news.*', 'categories.title as category_title' )
//            ->orderBy('id')
//            ->get();

        return view('admin.allNews', [
            'news' => News::paginate(5),
            'categories' => Category::all(),
            'categoriesTitle' => Category::query()->select(['id', 'title'])->get()
        ]);


    }

    public function create()
    {
        return view('admin.news.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request, News $news) { // в этот роут можно попасть единственным путем, передав данные через post,
        // поэтому здесь не проверяем
        $request->flash(); // метод фиксирует все данные от пользователя (сохраняются в одноразовую сессию),

        $url = null;
        if ($request->file('image')) {
            $path = Storage::putFile('public/img', $request->file('image'));
            $url = Storage::url($path);
            dump($path);
            dump($url);
        }

        $news->image = $url;
        $news->fill($request->all())->save();
        return redirect()->route('news.one', $news->id)->with('success', 'Новость успешно добавлена');
        }

    public function edit(News $news)
    {
        return view('admin.news.edit',[
            'news' => $news,
            'categories' =>  Category::all()
        ]);
    }

    public function destroy(News $news) {
        $news->delete();
        return redirect()->route('admin.news.index');
    }

    public function update(Request $request, News $news) {

        $url = null;
        if ($request->file('image')) {
            $path = Storage::putFile('public/img', $request->file('image'));
            $url = Storage::url($path);
        }

        $news->image = $url;
        $news->fill($request->all())->save();
        return redirect()->route('news.one', $news->id)->with('success', 'Новость изменена');
    }
}
