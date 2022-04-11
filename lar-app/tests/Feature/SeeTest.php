<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeeTest extends TestCase
{
    public function test_index()
    {
        $text = 'Новостной сайт Ньюс Лайн';

        $response = $this->get('/');

        $response->assertSee($text);
    }

    public function test_admine_news_create()
    {
        $text = 'Текст новости';

        $response = $this->get(route('admin.news.create'));

        $response->assertSee($text);
    }

    public function test_sport()
    {
        $text = 'Спорт';

        $response = $this->get('news/category/sport');

        $response->assertSee($text);
    }


}
