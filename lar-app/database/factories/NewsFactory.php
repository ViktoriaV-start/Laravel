<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 6),
            'title' => $this->faker->realText(10), // здесь вместо $faker ставим $this->faker, метод содержится внутри фабрики
            'text' => $this->faker->realText(rand(200,700)),
            'image' => null
        ];
    }
}
