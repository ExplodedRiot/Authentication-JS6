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
    return view('welcome');
});
//Practicum 1
//number 1.
Route::get('/contact', function () {return view('contact'); })->name('contact');
Route::get('/gallery', function () {return view('gallery'); })->name('gallery');
//number 2.
Route::get('/', function () {
    echo "Welcome";
});
//number 3.
Route::get('/about', function () {
    echo "Name: Della Arselatuiqrom NIM: 1941720027 Class: TI-2H";
});

Route::get('/article/{id}', function ($id) {
    echo ("This is article with id ".$id);
});

//Practicum 2
//number 1.
//number 2.
//number 3.
//Practicum 3
//number 1.
//number 2.
//number 3.
