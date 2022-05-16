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

Route::prefix('/')->group(function(){
    Route::get('/storage/asset', function(){})->name('image');
    Route::get('/global-css', function(){})->name('global-css');
    Route::get('/bootstrap-5', function(){})->name('bootstrap-5');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/places', function () {
    return view('places');
})->name('places');

Route::fallback(function(){
    return view('not_found');
});
