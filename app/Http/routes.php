<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'UserController@profile');
Route::post('/profile_img', 'UserController@update_avatar');
Route::post('createpost',[
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create'
]);