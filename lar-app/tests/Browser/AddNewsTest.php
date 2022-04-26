<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddNewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testTitle()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->type('title','1')
                ->press('Добавить новость')
                    ->assertSee('Количество символов в поле Заголовок новости должно быть не меньше 5.');
        });
    }

    public function testText()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->type('text','')
                ->press('Добавить новость')
                ->assertSee('Поле Текст новости обязательно для заполнения.');
        });
    }


}
