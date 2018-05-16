<?php

use Faker\Generator as Faker;



$factory->define(App\Image::class, function (Faker $faker) {
  
    return [
	'user_id' => App\User::all(['id'])->random(),
	    'filename' => $faker->unique()->word() . '.png',
	    'longitude' => $faker->longitude,
	    'latitude' => $faker->latitude,
    ];
});
