<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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

//Practicum 1 :
//number 1.
//Route::get('/contact', function () {return view('contact'); })->name('contact');
//Route::get('/gallery', function () {return view('gallery'); })->name('gallery');
//number 2.
//Route::get('/', function () {
  ////  echo "Welcome";
//});
//number 3.
//Route::get('/about', function () {
    //echo "Name: Della Arselatuiqrom NIM: 1941720027 Class: TI-2H";
//});

//Route::get('/article/{id}', function ($id) {
   // echo ("This is article with id ".$id);
//});

//Practicum 2 :
//number 2.
//Route::get('/', [PageController::class, 'index']);

//Route::get('/about', [PageController::class, 'about']);

//Route::get('articles/{id}', [PageController::class, 'articles']);

//number 3.

//Route::get('/', [HomeController::class, 'index']);

//Route::get('/about', [AboutController::class, 'about']);

//Route::get('articles/{id}', [ArticleController::class, 'articles']);

//Practicum 3

Route::get('/', function () {
  return view('index');
});
Route::get('/blog', function () {return view('blog'); })->name('blog');
Route::get('/columns', function () {return view('columns'); })->name('columns');
Route::get('/contact', function () {return view('contact'); })->name('contact');
Route::get('/ei-slider', function () {return view('ei-slider'); })->name('ei-slider');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
