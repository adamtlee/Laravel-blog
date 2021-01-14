<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
    return view('home', [
        'articles' => App\Models\Article::take(4)->latest()->get()
    ]);
});

Route::get('/about', function (){
    return view('about'); 
});

Route::get('/blogs', 'App\Http\Controllers\ArticlesController@index')->name('articles.index');
Route::post('/blogs', 'App\Http\Controllers\ArticlesController@store');
Route::get('/blogs/create', 'App\Http\Controllers\ArticlesController@create');
Route::get('/blogs/{article}', 'App\Http\Controllers\ArticlesController@show')->name('articles.show');
Route::get('/blogs/{article}/edit', 'App\Http\Controllers\ArticlesController@edit');
Route::put('/blogs/{article}/', 'App\Http\Controllers\ArticlesController@update');

Route::get('/projects', function (){
    return view('projects'); 
});



