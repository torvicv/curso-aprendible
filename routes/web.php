<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginUserController;

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
        Route::delete('/{post}', 'destroy')->name('delete-post');
    });
});

Route::get('/register', [RegisterUserController::class, 'index'])->name('register');

Route::post('/register', [RegisterUserController::class, 'store'])->name('register-user');

Route::get('/login', [LoginUserController::class, 'index'])->name('login');

Route::post('/login', [LoginUserController::class, 'login'])->name('login-user');

Route::post('/logout', [LoginUserController::class, 'logout'])->name('logout');
