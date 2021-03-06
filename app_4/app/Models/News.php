<?php

namespace App\Models;

use Faker\Factory;
use App\Models\Categories;

class News
{
    private Categories $categories; // здесь создаем экземпляр класса категорий

    private $news = [
        1 => [
            'id' => 1,
            'title' => 'Чемпионат мира по гандболу 2022',
            'text' => 'В Шанхай стартует чемпионат мира по гандболу.....',
            'slug' => 'novost1',
            'category_id' => 3,  //спорт
            'status' => 'active',
            'isPrivate' => false
        ],
        2 => [
            'id' => 2,
            'title' => 'Новости "Челси"',
            'text' => '«Челси» не сможет продавать билеты на матчи. Игры смогут посещать только по абонементам.....',
            'category_id' => 3,
            'status' => 'active',
            'isPrivate' => true
        ],
        3 => [
            'id' => 3,
            'title' => 'Прошлое и настоящее японского мореплавания',
            'text' => 'На протяжении 700 лет на островах Гейё господствовали пираты — .....',
            'category_id' => 1, // мир
            'status' => 'active',
            'isPrivate' => false
        ],
        4 => [
            'id' => 4,
            'title' => 'Риск-менеджемeнт',
            'text' => 'Высокий спрос на экспертов в области риск-менеджмента.....',
            'category_id' => 2, // бизнес
            'status' => 'active',
            'isPrivate' => false
        ],
        5 => [
            'id' => 5,
            'title' => 'Триумф джаза',
            'text' => '11 марта в России открывается фестиваль «Триумф джаза».....',
            'category_id' => 4, //культура
            'status' => 'active',
            'isPrivate' => true
        ],
        6 => [
            'id' => 6,
            'title' => 'В филиале ГИМа в Туле открывается выставка «Альбрехт Дюрер и его эпоха»',
            'text' => '1 марта в филиале Государственного исторического музея в Туле откроется выставка «Альбрехт Дюрер и его эпоха». В экспозицию войдут подлинные произведения из коллекции ГИМа. Также в рамках выставки в музее пройдут тематические экскурсии и лекции, посвященные эпохе, в которую жил сам Дюрер, его учителя и ученики.',
            'category_id' => 4,
            'status' => 'active',
            'isPrivate' => false
        ]
    ];



    public static $fakeNews = [];

    public function __construct(Categories $categories)
    {
        $this->categories = $categories;
    }


    public function getNews() {
        //dump(Str::slug('Новость 1'));

//        $faker = Factory::create();
//        $statusList = ['draft', 'active', 'blocked'];
//        for($i=0; $i<3; $i++) {
//            static::$fakeNews[] = [
//                'title' => $faker->jobTitle(),
//                'author' => $faker->userName(),
//                'status' => $statusList[mt_rand(0,2)],
//                'description' => $faker->text(100)
//            ];
//        }
        //dd(static::$fakeNews);
        return $this->news;
    }

    public function getNewsId($id) {
        return $this->getNews()[$id] ?? [];
    }

    public  function getNewsByCategoryId($id) {
        $categoryNews = [];
        $id = (int) $id;
        foreach ($this->getNews() as $item) {
            if ($item['category_id'] === $id) {
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
