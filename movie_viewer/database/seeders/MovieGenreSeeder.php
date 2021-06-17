<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\movie;
use App\Models\genre;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //semeando a o pivot movie_genre com o id de um livro e um gênero
        for($i = 1; $i <= 20; $i++){
            for($j = 1; $j <= 3; $j++){
                \App\Models\movieGenre::factory(1)->create([
                    'movie_id' => movie::find($i), //pega o id de um filme.
                    'genre_id' => genre::all()->random() //pega o id de um gênero aleatório.
                ]);
            }    
        }
    }
}