<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddCategoryTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testSeeCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('admin/category/create')
                    ->assertSee('Добавить категорию');
        });
    }

    public function testTitle()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/category/create')
                ->type('title','')
                ->press('Добавить категорию')
                ->assertSee('Поле Название категории обязательно для заполнения.');
        });
    }

    public function testSlug()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/category/create')
                ->type('slug','wr')
                ->press('Добавить категорию')
                ->assertSee('Количество символов в поле Slug должно быть не меньше 3.');
        });
    }



}
