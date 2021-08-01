<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use App\Models\movie

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 20; $i++){
            \App\Models\movie::factory(1)->create([              
                //pega o id de um usuário aletório.
                'user_id' => \App\Models\user::all()->random(),              
                //'genre_id' => \App\Models\genre::all()->random() //pega o id de um gênero aleatório.
            ]);
        }
    }
}