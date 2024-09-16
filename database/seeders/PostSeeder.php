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
        $post = collect([
            [
                'title' => 'new title one',
                'slug' => 'new slug one',
                'discription' => 'lorem 1 one one one ',
                'user_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'new title two',
                'slug' => 'new slug two',
                'discription' => 'lorem 2 two two two ',
                'user_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'new title three',
                'slug' => 'new slug three',
                'discription' => 'lorem 3 three three three ',
                'user_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'new title four',
                'slug' => 'new slug four',
                'discription' => 'lorem 4',
                'user_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $post->each(function ($posts) {
            Post::insert($posts);
        });
    }
}
