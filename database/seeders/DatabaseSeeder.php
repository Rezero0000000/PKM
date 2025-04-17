<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
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
        User::create([
            "name" => "Re",
            "username" => "re",
            "email" => "re@gmail.com",
            "password" => bcrypt(123),
            "role" => "admin"
        ]);

        Post::factory()->count(7)->create();
        User::factory()->count(5)->create();

        Category::create([
            "name" => "Coding",
            "slug" => "coding"
        ]);

        Category::create([
            "name" => "Desain",
            "slug" => "desain"
        ]);

        Category::create([
            "name" => "Linux",
            "slug" => "linux"
        ]);
    }
}
