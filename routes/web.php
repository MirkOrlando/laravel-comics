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

Route::get('/homepage', function () {
    //dd($comics);
    return view('homepage');
})->name('homepage');

Route::get('/characters', function () {
    //dd($comics);
    return 'characters';
})->name('characters');

Route::get('/', function () {
    $comics = config('db.comics');
    //dd($comics);
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/movies', function () {
    //dd($comics);
    return 'movies';
})->name('movies');

Route::get('/tv', function () {
    //dd($comics);
    return 'tv';
})->name('tv');

Route::get('/games', function () {
    //dd($comics);
    return 'games';
})->name('games');

Route::get('/collectibles', function () {
    //dd($comics);
    return 'collectibles';
})->name('collectibles');

Route::get('/videos', function () {
    //dd($comics);
    return 'videos';
})->name('videos');

Route::get('/fans', function () {
    //dd($comics);
    return 'fans';
})->name('fans');

Route::get('/news', function () {
    //dd($comics);
    return 'news';
})->name('news');

Route::get('/shop', function () {
    //dd($comics);
    return 'shop';
})->name('shop');
