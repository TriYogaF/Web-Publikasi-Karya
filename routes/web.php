<?php

use App\Models\User;
use App\Models\Artwork;
use App\Models\Literatur;
use App\Http\Livewire\LoadArtwork;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LiteraturController;
use App\Http\Controllers\DashboardArtworkController;
use App\Http\Controllers\DashboardLiteraturController;
use App\Http\Controllers\ArtworkCategoryController;
use App\Http\Controllers\LiteraturCategoryController;

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
        'active'=> 'home',
        'posts' => Artwork::latest()->get(),
        'literaturs' => Literatur::latest()->get()

    ]);
});


Route::get('/artwork', [ArtworkController::class, 'index']);
Route::get('/artwork/{artwork:slug}', [ArtworkController::class, 'show']);

// Route::get('/load-artwork', [LoadArtwork::class, 'render']);

Route::get('/literatur', [LiteraturController::class, 'index']);
Route::get('/literatur/{literatur:slug}', [LiteraturController::class, 'show']);


Route::get('/authors/{author:username}', function (User $author) {
    return view('author', [
        "title" => $author->name,
        "active" => "author",
        "literaturs" => $author->literatur,
        "posts" => $author->artwork,
        "author" => $author
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/category', [DashboardController::class, 'category'])->middleware('auth');

Route::get('/dashboard/artwork/cek', [DashboardArtworkController::class, 'cek'])->middleware('auth');
Route::resource('/dashboard/artwork', DashboardArtworkController::class)->middleware('auth');

Route::get('/dashboard/literatur/cek', [DashboardLiteraturController::class, 'cek'])->middleware('auth');
Route::resource('/dashboard/literatur', DashboardLiteraturController::class)->middleware('auth');


Route::get('/dashboard/category/art/cek', [ArtworkCategoryController::class, 'cek'])->middleware('auth');
Route::resource('/dashboard/category/art', ArtworkCategoryController::class)->except('show')->middleware('auth');

Route::get('/dashboard/category/lit/cek', [LiteraturCategoryController::class, 'cek'])->middleware('auth');
Route::resource('/dashboard/category/lit', LiteraturCategoryController::class)->except('show')->middleware('auth');