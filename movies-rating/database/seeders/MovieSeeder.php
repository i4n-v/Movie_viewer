<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 5; $i++){
            \App\Models\movie::factory(1)->create([
                'user_id' => \App\Models\user::all()->random() //pega o id de um usuário aletório.
            ]);
        }
    }
}
