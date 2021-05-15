<?php

namespace Database\Factories;

use App\Models\movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3), //sentença de 13 caracteres
            'author' => $this->faker->name(), //nome aleatório
            'year' => $this->faker->year(), //ano aleatório
            'duration' => $this->faker->randomFloat(2), //float aleatório
            'description' => $this->faker->sentence(7)
        ];
    }
}
