<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditCategoryTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testSeeEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/category/1/edit')
                ->assertSee('Редактировать категорию');
        });
    }

    public function testTitle()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/category/1/edit')
                ->type('title','1')
                ->press('Сохранить изменения')
                ->assertSee('Количество символов в поле Название категории должно быть не меньше 3.');
        });
    }

    public function testSlug()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/category/1/edit')
                ->type('slug','')
                ->press('Сохранить изменения')
                ->assertSee('Поле Slug обязательно для заполнения.');
        });
    }
}
