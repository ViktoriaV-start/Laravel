<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Categories $categories) {
        return view('news.category', [
            'categories' => $categories->getCategories()
        ]);
    }

    public function show(News $news, Categories $categories, $title) {
        $categoryItem = $categories->getCategoryByName($title);
        $categoryNews = [];

        foreach ($news->getNews() as $item) {
            if ($item['category_id'] === $categoryItem['id']) {
                $categoryNews[] = $item;
            }
        }

        return view('news.category', [
        'category' => $categoryItem,
        'news' => $categoryNews
        ]);
    }
}
