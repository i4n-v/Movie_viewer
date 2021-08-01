<?php

namespace Database\Factories;

use App\Models\movieGenre;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieGenreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = movieGenre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //outros atributos
        ];
    }
}
