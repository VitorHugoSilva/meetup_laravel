<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Blog\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'sub_title' => $faker->sentence(2),
        'content' => $faker->sentence,
        'category_id' => $faker->numberBetween(1, 10),
    ];
});
