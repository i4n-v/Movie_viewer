<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create(); //Chama diretamente a factory do model User

        //chama classes seeders separadamente, cada uma em seu arquivo (forma mais organizada)
        $this->call([
            UserSeeder::class,
            GenreSeeder::class, //A ordem importa
            MovieSeeder::class,//A ordem importa
            MovieGenreSeeder::class,
            // PostSeeder::class,
            // CommentSeeder::class,
        ]);
    }
}
