<?php

namespace App\Models;

class Categories
{
    private $categories = [
        1 => [
            'id' => 1,
            'title' => 'Мир',
            'slug' => 'world'
        ],
        2 => [
            'id' => 2,
            'title' => 'Бизнес',
            'slug' => 'business'
        ],
        3 => [
            'id' => 3,
            'title' => 'Спорт',
            'slug' => 'sport'
        ],
        4 => [
            'id' => 4,
            'title' => 'Культура',
            'slug' => 'culture'
        ],
        5 => [
            'id' => 5,
            'title' => 'Политика',
            'slug' => 'politics'
        ],
        6 => [
            'id' => 6,
            'title' => 'Наука',
            'slug' => 'science'
        ],
    ];

    public function getCategories() {
        return $this->categories;
    }

    public function getCategoryById($id) {
        return $this->getCategories()[$id]  ?? [];
    }

    public function getCategoryIdBySlug($slug) {
        $id = null;
        foreach ($this->getCategories() as $item) {
            if ($item['slug'] == $slug) {
                $id = $item['id'];
                break;
            }
        }
        return $id;
    }

    public function getCategoryTitleBySlug($slug) {
        $id = $this->getCategoryIdBySlug($slug);
        $category = $this->getCategoryById($id);
        return $category['title'] ?? "Категория отсутствует";
    }
}
