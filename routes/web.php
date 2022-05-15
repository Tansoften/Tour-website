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

Route::get('public/storage/asset', function(){})->name('image');
Route::get('public/resources', function(){})->name('');

Route::get('/', function () {
    return view('home');
});

Route::get('public/places', function () {
    return view('places');
});

Route::fallback(function(){
    return view('not_found');
});
