<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Dom\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
          Article::factory()->count(20)->create();
          \App\Models\Comment::factory(40)->create();
    //    Article::factory(20)->create(); in class

        $list = ['News','Tech','Web','App','Oss'];
        foreach($list as $name) {
            Category::create(['name' => $name]);
        }

        \App\Models\User::factory()->create([
            'name' => 'Alice',
            'email' => 'alice@gmail.com',

        ]);
        \App\Models\User::factory()->create([
            'name' => 'Bob',
            'email' => 'bob@gmail.com',

        ]);


       
    //    ArticleFactory is not a model, it’s just a helper class.
    }
}
