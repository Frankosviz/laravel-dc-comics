<?php
use App\Http\Controllers\ComicController;
use Doctrine\DBAL\Schema\Index;
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

Route::resource('comics', ComicController::class);

Route::get('/books', function () {
    return view('books.index');
})->name('books');

Route::get('/characters', function () {
    return view('characters.index');
})->name('characters');

Route::get('/movies', function () {
    return view('movies.index');
})->name('movies');

Route::get('/tv', function () {
    return view('tv.index');
})->name('tv');

Route::get('/games', function () {
    return view('games.index');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles.index');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos.index');
})->name('videos');

Route::get('/fans', function () {
    return view('fans.index');
})->name('fans');

Route::get('/news', function () {
    return view('news.index');
})->name('news');

Route::get('/shop', function () {
    return view('shop.index');
})->name('shop');
