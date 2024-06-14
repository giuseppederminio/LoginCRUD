<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class,'home'])->name('home');

// route per login and logout
Route::get('/home', [PublicController::class,'home']); //ho levato ->name('home') perchè temo vada in conflitto 

Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class,'store'])->name('article.store');

Route::get('/article/update/{articles}', [ArticleController::class,'update'])->name('article.update');

 Route::put('/article/edit/{article}', [ArticleController::class,'edit'])->name('article.edit');
