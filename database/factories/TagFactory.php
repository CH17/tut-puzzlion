<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Tag::class, function (Faker $faker) {

    $tag = $faker->word();

    return [
        'tag' => $tag,
        'slug' => Str::slug($tag)
    ];
});
