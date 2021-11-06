<?php

use App\Models\User;
use App\Models\Artwork;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtworkController;

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
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/artwork', [ArtworkController::class, 'index']);
Route::get('/artwork/{art:slug}', [ArtworkController::class, 'show']);


Route::get('/literatur', function () {
    return view('literatur', [
        "title" => "Literatur",
        "active" => "literatur"
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('author', [
        "title" => $author->name,
        "active" => "author",
        "posts" => $author->artwork,
        "author" => $author
    ]);
});

// Route::get('/authors/{author:username}/art', function (User $author) {
//     return view('artwork', [
//         "title" => "Artwork Author",
//         "posts" => $author->artwork,
//         // "author" => $author
//     ]);
// });

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