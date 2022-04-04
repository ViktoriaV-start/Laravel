<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LocationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_location()
    {
        $uri = 'http://localhost';
        $response = $this->get(route('admin.index'));
        $response->assertLocation($uri);
    }
}
