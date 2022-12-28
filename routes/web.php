<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;

/* Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}',[PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
Route::patch('/blog/{post}',[PostController::class, 'update'])->name('posts.update');
Route::delete('/blog/{post}',[PostController::class, 'destroy'])->name('posts.destroy'); */

Route::view('/', 'welcome')->name('welcome');

Route::view('/contacto', 'contact')->name('contact');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);

Route::view('/about', 'about')->name('about');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::view('/login', 'auth.login')->name('login');
Route::view('/registro', 'auth.registro')->name('registro');
Route::post('/registro', [RegisteredUserController::class, 'store']);
