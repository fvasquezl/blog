<?php

use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class,15)->create()->each(function ($post){
            $tags = Tag::all()->random(mt_rand(1,3))->pluck('id');
            $post->tags()->attach($tags);
        });
    }
}
