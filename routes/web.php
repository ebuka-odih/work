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
    return view('front.index');
});
Route::get('/submit-review', function () {
    return view('front.write-review');
})->name('write-review');

Route::get('/review-detail', function () {
    return view('front.reviews');
})->name('reviews');

Route::get('/reviews', function () {
    return view('front.review-list');
});


