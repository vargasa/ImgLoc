<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post as Post;
use \App\User as User;
use \App\Image as Image;
use App\Http\Resources\PostResource as PostResource;

class PostController extends Controller
{

    /////////////////////////////////////////////////////
    public function index(){
	return PostResource::collection(Post::all());
    }

    /////////////////////////////////////////////////////
    public function show(Post $post){
	return new PostResource($post);
    }

    /////////////////////////////////////////////////////
    public function create(Request $request) {

	/*
	$post = Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,	    
	]);
	*/

    }
    
    /////////////////////////////////////////////////////
    public function update(){

    }

    /////////////////////////////////////////////////////
    public function delete(){

    }
    
}
