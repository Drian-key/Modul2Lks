<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Riski Drian Pratama',
            'class_id' => 1,
            'email' => 'riskidrian1@gmail.com',
            'password' => bcrypt('12345678')
        ]);


    }
}
