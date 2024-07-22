<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();
        for ($i = 0; $i < 20 ; $i++) {
            Post::create([
                'category_id' => rand(1, 16),
                'title' => fake()->text(50),
                'content' => fake()->text(1000),
                'thumbnail' => '/theme/client/images/post/post-' . rand(1, 10) . '.jpg',
                'view' => rand(0, 100),
            ]);
        }
    }
}
