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

// Route::get('/', function () {
//     return view('welcome');
//     // return "Hi You";
// });

// Route::get('/about', function () {
//     // return view('welcome');
//     return "This is the about page";
// });

// Route::get('/contact', function () {
//     // return view('welcome');
//     return "This is the contact page";
// });

// Route::get('/post/{id}/{name}', function($id, $name){
//     return "this is post number ".$id. " ". $name;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home' , function(){
//     $url = route('admin.home');
//     return "this url is ".$url;
// }));

// Route::get('/post/{id}', 'PostsController@index');
// Route::resource('posts', 'PostsController');
Route::get('/contact', 'PostsController@contact');
Route::get('/post/{id}/{name}/{foo}', 'PostsController@show_post');
