<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
//    private $categories = [
//        1 => [
//            'id' => 1,
//            'title' => 'Мир',
//            'slug' => 'world'
//        ],
//        2 => [
//            'id' => 2,
//            'title' => 'Бизнес',
//            'slug' => 'business'
//        ],
//        3 => [
//            'id' => 3,
//            'title' => 'Спорт',
//            'slug' => 'sport'
//        ],
//        4 => [
//            'id' => 4,
//            'title' => 'Культура',
//            'slug' => 'culture'
//        ],
//        5 => [
//            'id' => 5,
//            'title' => 'Политика',
//            'slug' => 'politics'
//        ],
//        6 => [
//            'id' => 6,
//            'title' => 'Наука',
//            'slug' => 'science'
//        ],
//    ];

    public function getCategories() {
        $categories = DB::table('categories')->get(); //getAll

        return $categories;
    }

    public function getCategoryById($id) {
        $category = null;

        foreach ($this->getCategories() as $item) {

            if ($item->id == $id) {
                $category = $item->title;
                break;
            }
        }
        return $category  ?? [];
    }

    public function getCategoryIdBySlug($slug) {
        $id = null;
        foreach ($this->getCategories() as $item) {
            if ($item->slug == $slug) {
                $id = $item->id;
                break;
            }
        }
        return $id;
    }

    public function getCategoryTitleBySlug($slug) {
        $id = $this->getCategoryIdBySlug($slug);
        $category = $this->getCategoryById($id);

        return $category ?? "Категория отсутствует";
    }
}
