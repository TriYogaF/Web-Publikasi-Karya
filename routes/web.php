<?php

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
Route::get('/artwork', function () {
    return view('artwork', [
        "title" => "Artwork"
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
Route::get('/artpage', function () {
    return view('artpage', [
        "title" => "Artpage"
    ]);
});