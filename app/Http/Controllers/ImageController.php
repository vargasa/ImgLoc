<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\User;
use App\Http\Resources\ImageResource;


class ImageController extends Controller
{
    /////////////////////////////////////////////////////
    public function index(){
	// Need to restrict output to user scope
	return ImageResource::collection(Image::all());
    }
    
    /////////////////////////////////////////////////////
    public function show(Image $image){
	return new ImageResource($image);
    }
    
    /////////////////////////////////////////////////////
    public function create(){

    }
    
    /////////////////////////////////////////////////////
    public function update(){
	
    }
    
    /////////////////////////////////////////////////////
    public function delete(){

    }

}
