<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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
    return view('Frontend.Pages.trang_chu');
})->name('home');

Route::group(['prefix' =>'/'], function() {
    Route::get('/posts', [PageController::class, 'getPosts'])->name('posts');
    Route::get('/about', [PageController::class, 'getAbout'])->name('about');
    Route::get('/contact', [PageController::class, 'getContact'])->name('contact');
    Route::get('/signUp', [PageController::class, 'getSignUp'])->name('signUp');
    Route::post('/signUp', [PageController::class, 'postSignUp'])->name('signUp');
    Route::get('/login', [PageController::class, 'getLogin'])->name('login');
    Route::post('/login', [PageController::class, 'postLogin'])->name('login');
    Route::post('/login', [PageController::class, 'postLogin'])->name('login');
});
