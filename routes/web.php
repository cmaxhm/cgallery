<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TagsController;
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

Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category');
Route::get('/categories', [CategoriesController::class, 'show'])->name('categories');
Route::get('/tag/{slug}', [TagController::class, 'show'])->name('tag');
Route::get('/tags', [TagsController::class, 'show'])->name('tags');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post');
