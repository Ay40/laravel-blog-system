<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class,'index']); // static route

Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']); // dynamic route 
Route::get('/articles/delete/{id}', [ArticleController::class, 'delete']); // dynamic route 

Route::get('/articles/add', [ArticleController::class, 'add']);
Route::post('/articles/add', [ArticleController::class, 'create']);

Route::get('/comments/delete/{id}', [CommentController::class, 'delete']);
Route::post('/comments/add', [CommentController::class, 'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
