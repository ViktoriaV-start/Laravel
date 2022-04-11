<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\News;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_news()
    {
        $value = 'news.index';
        $response = $this->get(route('news.index'));
        $response->assertViewIs($value);
    }

    public function test_admin_news()
    {
        $value = 'admin.allNews';
        $response = $this->get(route('admin.news.index'));
        $response->assertViewIs($value);
    }

    public function test_admin_news_create()
    {
        $value = 'admin.news.create';
        $response = $this->get(route('admin.news.create'));
        $response->assertViewIs($value);
    }

    public function test_about()
    {
        $value = 'about';
        $response = $this->get(route('about'));
        $response->assertViewIs($value);
    }

    public function test_admin_index()
    {
        $value = 'admin.index';
        $response = $this->get(route('admin.index'));
        $response->assertViewIs($value);
    }

    public function test_admin_category_create()
    {
        $value = 'admin.category.create';
        $response = $this->get(route('admin.category.create'));
        $response->assertViewIs($value);
    }

}
