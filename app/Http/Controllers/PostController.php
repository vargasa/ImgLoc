<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
