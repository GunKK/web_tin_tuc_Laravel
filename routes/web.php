<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TopicController;
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
    Route::group(['prefix' =>'/posts'], function() {
        Route::get('/{id}', [PageController::class, 'postDetail'])->name('postDetail');
        Route::post('/{id}', [PageController::class, 'comment'])->name('comment');
    });
    Route::get('/loaiTin/{id}', [PageController::class, 'getLoaiTin'])->name('loaiTin');
    Route::get('/about', [PageController::class, 'getAbout'])->name('about');
    Route::get('/contact', [PageController::class, 'getContact'])->name('contact');
    Route::get('/signUp', [PageController::class, 'getSignUp'])->name('signUp');
    Route::post('/signUp', [PageController::class, 'postSignUp'])->name('signUp');
    Route::get('/login', [PageController::class, 'getLogin'])->name('login');
    Route::post('/login', [PageController::class, 'postLogin'])->name('login');
    Route::post('/logout', [PageController::class, 'login'])->name('logout');
    Route::get('/my.account', [PageController::class, 'myAccount'])->name('myAccount');
    Route::get('/search', [PageController::class, 'getSearch'])->name('search');
});

Route::group(["prefix" => "/admin"], function(){
    Route::group(["prefix" => "/category"], function() {
        Route::get("/", [CategoryController::class, "getCategorys"])->name("category");
        Route::get("/add",[CategoryController::class, "getAddCategory"])->name("addCategory");
        Route::post("/add",[CategoryController::class, "postAddCategory"])->name("addCategory");
        Route::get("/update/{id}",[CategoryController::class, "getUpdateCategory"])->name("updateCategory");
        Route::post("/update/{id}",[CategoryController::class, "postUpdateCategory"])->name("updateCategory");
        Route::get("/delete/{id}",[CategoryController::class, "getDestroyCategory"])->name("destroyCategory");
    });
    Route::group(["prefix" => "/topic"], function() {
        Route::get('/', [TopicController::class, "getTopics"])->name("topic");
        // Route::get("/", [TopicController::class, "getTopics"])->name("topic");
        Route::get("/add",[TopicController::class, "getAddTopic"])->name("addTopic");
        Route::post("/add",[TopicController::class, "postAddTopic"])->name("addTopic");
        Route::get("/update/{id}",[TopicController::class, "getUpdateTopic"])->name("updateTopic");
        Route::post("/update/{id}",[TopicController::class, "postUpdateTopic"])->name("updateTopic");
        Route::get("/delete/{id}",[TopicController::class, "getDestroyTopic"])->name("destroyTopic");
    });
    Route::group(["prefix" => "/post"], function() {
        Route::get("/", [PostController::class, "getPosts"])->name("post");
        Route::get("/add",[PostController::class, "getAddPost"])->name("addPost");
        Route::post("/add",[PostController::class, "postAddPost"])->name("addPost");
        Route::get("/show/{id}",[PostController::class, "getShowPost"])->name("showPost");
        Route::get("/update/{id}",[PostController::class, "getUpdatePost"])->name("updatePost");
        Route::post("/update/{id}",[PostController::class, "postUpdatePost"])->name("updatePost");
        Route::get("/delete/{id}",[PostController::class, "getDestroyPost"])->name("destroyPost");
    });
});