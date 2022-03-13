<?php

namespace App\Models;

class Categories
{
    private $categories = [
        'world' => [
            'id' => 1,
            'title' => 'Мир'
        ],
        'business' => [
            'id' => 2,
            'title' => 'Бизнес'
        ],
        'sport' => [
            'id' => 3,
            'title' => 'Спорт'
        ],
        'culture' => [
            'id' => 4,
            'title' => 'Культура'
        ],
    ];

    public function getCategories() {
        return $this->categories;
    }

    public function getCategoryByName($name) {
        return $this->getCategories()[$name]  ?? [];
    }

}
