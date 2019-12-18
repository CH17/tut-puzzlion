<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->paragraph(),
        'user_id' => $faker->numberBetween(1, 5),
        'puzzle_id' => $faker->numberBetween(1, 30),
        'upvote_count' => $faker->numberBetween(0, 15),
        'downvote_count' => $faker->numberBetween(0, 15),
        'is_approved' => $faker->boolean()
    ];
});
