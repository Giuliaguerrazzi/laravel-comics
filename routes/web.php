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

// Route::get('/', function () {

//     // prendere i dati dal file php
//     $comics = config('comics');

//     // passare alla vista home
    
//      return view('home', compact('comics'));
// })->name('home');

Route::get('/', 'HomeController@index')->name('home');


Route::get('/comic/{id}', 'ComicController@show')->name('comic-detail');
