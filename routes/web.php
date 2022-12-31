<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
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

Route::redirect('/', '/home');

Route::get('/home', [PostController::class, 'index'])->name('posts.index');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::patch('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::get('/players/{id}', [PlayerController::class, 'show'])->name('players.show');

Route::get('/players/{id}/edit', [PlayerController::class, 'edit'])->name('players.edit');

Route::patch('players/{id}', [PlayerController::class, 'update'])->name('players.update');

Route::redirect('/dashboard', '/home');


require __DIR__.'/auth.php';
