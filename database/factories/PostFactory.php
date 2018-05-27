<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
	'user_id' => App\User::all(['id'])->random(),
	'title' => $faker->sentence,
	    'description' => $faker->paragraph
    ];
});
