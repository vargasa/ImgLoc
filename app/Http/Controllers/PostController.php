<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post as Post;

class PostController extends Controller
{
    public function create(Request $request) {

	echo $request->get('PostTitle');
	echo $request->get('PostDescription');
	echo $request->file('Img');
	echo $request->get('ImgLatitude');
	echo $request->get('ImgLongitude');

	echo "___";

    }

    public function show($user_id,$post_id,$image_id){
	$user = \App\User::find($user_id);
	$post = \App\Post::find($post_id);
	$image = \App\Image::find($image_id);
	
	return [$user,$user->posts()->get(),$user->images()->get()];
    }
    
}
