<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->colorName;
        'artist' => $faker->name;
        'genre' => $faker->domainWord;
    ];
});
