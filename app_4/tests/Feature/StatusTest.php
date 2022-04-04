<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StatusTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_news()
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
    }

    public function test_category()
    {
        $response = $this->get(route('news.category.index'));
        $response->assertStatus(200);
    }

}
