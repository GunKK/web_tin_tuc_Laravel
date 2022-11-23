<?php

use App\Http\Controllers\PageController;
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
    Route::get('/about', [PageController::class, 'getAbout'])->name('about');
    Route::get('/contact', [PageController::class, 'getContact'])->name('contact');
});