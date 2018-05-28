<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function show(){
	// Need to check user_id
	return UserResource::collection(User::all());
    }
    
}
