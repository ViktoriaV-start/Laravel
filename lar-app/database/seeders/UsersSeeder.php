<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert($this->getData());
    }

    private function getData() {
        $data = [
            [
                'name' => 'Иван',
                'surname' => 'Иванов',
                'email' => 'ivivanov@mail.ru',
                'password' => '123'
            ],
            [
                'name' => 'Анна',
                'surname' => 'Петрова',
                'email' => 'petrova@mail.ru',
                'password' => '123'
            ],
            [
                'name' => 'Сергей',
                'surname' => 'Сергеей',
                'email' => 'sergeev@mail.ru',
                'password' => '123'
            ],
            [
                'name' => 'Алла',
                'surname' => 'Сергеева',
                'email' => 'sergeeva@mail.ru',
                'password' => '123'
            ],
            [
                'name' => 'Анна',
                'surname' => 'Фролова',
                'email' => 'frolova@mail.ru',
                'password' => '123'
            ],
            [
                'name' => 'Федор',
                'surname' => 'Конь',
                'email' => 'kon@mail.ru',
                'password' => '123'
            ],
            [
                'name' => 'Иван',
                'surname' => 'Перов',
                'email' => 'perov@mail.ru',
                'password' => '123'
            ],
            [
                'name' => 'Ольга',
                'surname' => 'Серова',
                'email' => 'serova@mail.ru',
                'password' => '123'
            ],
            [
                'name' => 'Матвей',
                'surname' => 'Корнеев',
                'email' => 'korneev@mail.ru',
                'password' => '123'
            ],
            [
                'name' => 'Елена',
                'surname' => 'Зябликова',
                'email' => 'elzi@mail.ru',
                'password' => '123'
            ]

        ];

        return $data;
    }
}

