<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Blog\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
        'description' => $faker->sentence()
    ];
});
