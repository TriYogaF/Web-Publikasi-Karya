<?php

use App\Http\Controllers\ArtController;
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

Route::get('/artwork', [ArtController::class, 'index']);
Route::get('/artwork/{art:slug}', [ArtController::class, 'show']);


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