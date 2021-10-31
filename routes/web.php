<?php

use App\Models\Artwork;
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
    return view('index', [
        "title" => "Home"
    ]);
});

// $art_posts = [
//     [
//         "caption" => "Artwork 1",
//         "data-name" => "drawing",
//         "img" => "a1.jpg",
//         "slug" => "artwork-1"
//     ],
//     [
//         "caption" => "Artwork 2",
//         "data-name" => "drawing",
//         "img" => "a2.jpg",
//         "slug" => "artwork-2"
//     ]
//     ];
Route::get('/artwork', function () {

    return view('artwork', [
        "title" => "Artwork",
        "posts" => Artwork::all()
    ]);
});


Route::get('/artwork/{slug}', function ($slug) {

    // $new_art=[];
    // foreach ($art_posts as $post) {
    // if($post["slug"] === $slug){
    //     $new_art = $post;
    //     }
    // }
    return view('artpage', [
        "title" => "Artpage",
        "post" => Artwork::find($slug)
    ]);
});

Route::get('/literatur', function () {
    return view('literatur', [
        "title" => "Literatur"
    ]);
});
Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});
Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});