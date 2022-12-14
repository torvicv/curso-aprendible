<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PostController;

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
//     return view('welcome');
// });

Route::controller(WebController::class)->prefix('web')->group(function() {
    Route::get('/', 'index')->name('welcome');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::controller(PostController::class)->prefix('blog')->group(function() {
        Route::get('/', 'index')->name('blog');
        Route::get('/create', 'create')->name('create-post');
        Route::get('/{post}', 'show')->name('show-post');
        Route::post('/', 'store')->name('store-post');
        Route::get('/{post}/edit', 'edit')->name('edit-post');
        Route::patch('/{post}/update', 'update')->name('update-post');
    });
});
