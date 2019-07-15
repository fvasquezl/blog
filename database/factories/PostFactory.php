<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'excerpt' => $faker->text(100),
        'body' => $faker->text(300),
        'published_at' => $faker->dateTimeBetween('-30 days', '+30 days'),
        'category_id' => Category::all()->random()->id,
    ];
});

