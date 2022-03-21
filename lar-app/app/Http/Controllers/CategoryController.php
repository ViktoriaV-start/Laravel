<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Categories $categories) {
        return view('news.categories', [
            'categories' => $categories->getCategories()
        ]);
    }

//    public function show(News $news, Categories $categories, $id) {
////        $categoryItem = $categories->getCategoryById($id);
////        $categoryNews = [];
////
////        foreach ($news->getNews() as $item) {
////            if ($item['category_id'] === $categoryItem['id']) {
////                $categoryNews[] = $item;
////            }
////        }
//
////        dump($categories->getCategoryById($id));
////        dump($news->getNewsByCategoryId($id));
//
//        return view('news.category', [
//        'category' => $categories->getCategoryById($id),
//        'news' => $news->getNewsByCategoryId($id)
//        ]);
//    }

    public function show(News $news, Categories $categories, $slug) {
       // dump($news->getNewsByCategoryId($slug));
        return view('news.category', [

            'category' => $categories->getCategoryTitleBySlug($slug),
            'news' => $news->getNewsByCategorySlug($slug)
        ]);
    }


}
