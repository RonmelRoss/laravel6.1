<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
        return view('welcome');
    });

// Returning strings
Route::get('/welcome', function () {
    return "Welcome, Ronmel!";
});

// Returning JSON values
Route::get('/array', function () {
    return ["foo"=>"bar"];
});

// Passing request data to views
Route::get('/test', function () {
    // return request('name');
    
    return view('test', [
        'name' => request('name')
    ]);
});

// Route Wildcards
// Route::get('/post/{post}', function ($post){
//     // return $post;
//     $blog = [
//         'my-first-post' => 'Hello, this is my first post!',
//         'my-second-post' => 'Hi, I am sharing my second post!'
//     ];

//     if (! array_key_exists($post, $blog)) {
//         abort(404, 'Sorry, page not found.');
//     }

//     return view('post', [
//         'post' => $blog[$post] // ?? 'Nothing here.'
//     ]);
// });

// Route using controllers
Route::get('/post/{post}', 'PostsController@show');

Route::view('/about', 'about');

Route::view('/simple-work', 'simple-work-home');

// Route::view('/simple-work/about', 'simple-work-about');
Route::get('/simple-work/about', function () {
    return view('simple-work-about');
});