<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        $this->call(DefaultUserSeeder::class);
        Post::factory(10)->for(
            User::factory()->create(
            [
                'first_name' => 'John Doe',
                'last_name' => 'Steve',
                'email' => 'mm@gmail.com'
            ]
        ))->create();

    }

}
