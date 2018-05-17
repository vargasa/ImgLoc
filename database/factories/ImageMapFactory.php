<?php

use Faker\Generator as Faker;
use App\Post as Post;
use App\Image as Image;
use App\User as User;


$factory->define(App\ImageMap::class, function (Faker $faker) {
    
    return [
        'post_id' => Post::all(['id'])->random(),
	'image_id' => Image::all(['id'])->random(),
    ];
});
