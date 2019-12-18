<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Puzzle;
use Faker\Generator as Faker;

$factory->define(Puzzle::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph(),
        'user_id' => $faker->numberBetween(1, 5),
        'like_count' => $faker->numberBetween(0, 150),
        'comment_count' => $faker->numberBetween(0, 15),
        'is_answered' => $faker->boolean(),
        'has_approved_answer' => $faker->boolean()
    ];
});
