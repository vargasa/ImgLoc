<?php

use Illuminate\Http\Request;
use App\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('image','ImageController@index');
Route::get('image/{image}','ImageController@show');
Route::post('image','ImageController@create');
Route::put('image/{image}','ImageController@update');
Route::delete('image/{image}','ImageController@delete');

Route::get('user','UserController@show');
Route::post('user','UserController@create');
Route::put('user','UserController@update');
Route::delete('user','UserController@delete');

Route::get('post','PostController@index');
Route::get('post/{post}','PostController@show');
Route::post('post','PostController@create');
Route::put('post','PostController@update');
Route::delete('post/{post}','PostController@delete');


