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

Route::get('/blogs', function (){
    return view('blogs', [
        // 'articles' => App\Models\Article::take(3)->latest()->get()
        'articles' => App\Models\Article::latest()->get()
    ]);
});
Route::get('/blogs/{article}', 'App\Http\Controllers\ArticlesController@show');

Route::get('/projects', function (){
    return view('projects'); 
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/posts/{post}' , [PostsController::class,'show']);



