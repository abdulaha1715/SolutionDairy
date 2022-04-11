<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Problem;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'              => 'Abdulaha Islam',
            'username'          => 'abdulaha1715',
            'email'             => 'abdulahaislam210917@gmail.com',
            'password'          => bcrypt('01918786189'),
            'email_verified_at' => now(),
            'avatar'            => 'https://picsum.photos/300',
        ]);


        User::create([
            'name'              => 'Admin',
            'username'          => 'admin',
            'email'             => 'admin@gmail.com',
            'password'          => bcrypt('admin'),
            'email_verified_at' => now(),
            'avatar'            => 'https://picsum.photos/300',
        ]);

        Category::factory(10)->create();

        Problem::factory(20)->create();
    }
}
