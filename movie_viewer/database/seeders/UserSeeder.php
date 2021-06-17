<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<=5; $i++){
            \App\Models\User::factory(1)->create([
                'email' => "User$i@gmail.com"
            ]); 
        }
    }
}
