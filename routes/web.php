<?php

use App\Models\User;
use App\Models\Artwork;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Livewire\LoadArtwork;

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

// Route::get('/load-artwork', [LoadArtwork::class, 'render']);


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

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

// Route::get('/register', function () {
//     return view('login.index', [
//         "title" => "Register",
//         "active" => "register"
//     ]);
// });