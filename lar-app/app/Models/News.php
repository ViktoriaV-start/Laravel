<?php

namespace App\Models;

use Faker\Factory;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class News
{
    private Category $categories; // здесь создаем экземпляр класса категорий

//    private $news = [
//        1 => [
//            'id' => 1,
//            'title' => 'Чемпионат мира по гандболу 2022',
//            'text' => 'В Шанхай стартует чемпионат мира по гандболу.....',
//
//            'category_id' => 3,  //спорт
//            'status' => 'active',
//            'isPrivate' => false
//        ],
//        2 => [
//            'id' => 2,
//            'title' => 'Новости "Челси"',
//            'text' => '«Челси» не сможет продавать билеты на матчи. Игры смогут посещать только по абонементам.....',
//            'category_id' => 3,
//            'status' => 'active',
//            'isPrivate' => true
//        ],
//        3 => [
//            'id' => 3,
//            'title' => 'Прошлое и настоящее японского мореплавания',
//            'text' => 'На протяжении 700 лет на островах Гейё господствовали пираты — .....',
//            'category_id' => 1, // мир
//            'status' => 'active',
//            'isPrivate' => false
//        ],
//        4 => [
//            'id' => 4,
//            'title' => 'Риск-менеджемeнт',
//            'text' => 'Высокий спрос на экспертов в области риск-менеджмента.....',
//            'category_id' => 2, // бизнес
//            'status' => 'active',
//            'isPrivate' => false
//        ],
//        5 => [
//            'id' => 5,
//            'title' => 'Триумф джаза',
//            'text' => '11 марта в России открывается фестиваль «Триумф джаза».....',
//            'category_id' => 4, //культура
//            'status' => 'active',
//            'isPrivate' => true
//        ],
//        6 => [
//            'id' => 6,
//            'title' => 'В филиале ГИМа в Туле открывается выставка «Альбрехт Дюрер и его эпоха»',
//            'text' => '1 марта в филиале Государственного исторического музея в Туле откроется выставка «Альбрехт Дюрер и его эпоха». В экспозицию войдут подлинные произведения из коллекции ГИМа. Также в рамках выставки в музее пройдут тематические экскурсии и лекции, посвященные эпохе, в которую жил сам Дюрер, его учителя и ученики.',
//            'category_id' => 4,
//            'status' => 'active',
//            'isPrivate' => false
//        ]
//    ];

    public function __construct(Category $categories)
    {
        $this->categories = $categories;
    }

    public function getNews() {
        $news = DB::table('news')->get(); //getAll
        return $news;
    }

    public function getNewsId($id) {
        return $this->getNews()[$id] ?? [];
    }

    public  function getNewsByCategoryId($id) {
        $categoryNews = [];
        $id = (int) $id;
        foreach ($this->getNews() as $item) {
            if ($item->category_id === $id) {
                $categoryNews[] = $item;
            }
        }
        return $categoryNews;
    }

    public function getNewsByCategorySlug($slug) {
       $id = $this->categories->getCategoryIdBySlug($slug);
       return $this->getNewsByCategoryId($id);
    }
}
