<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

//ROTAS AUTENTICADAS
Route::middleware(['authenticate'])->group(function () {

    Route::middleware(['admin'])->group(function () {
        Route::get('/article', [ArticleController::class, 'view'])->name('article.view');
        Route::get('/allarticles', [ArticleController::class, 'allarticles'])->name('article.allarticles');
        Route::get('/article/edit/{id}', [ArticleController::class, 'editarticle'])->name('article.editarticle');
        Route::put('/article/update/{id}', [ArticleController::class, 'updatearticle'])->name('article.updatearticle');
        Route::delete('/article/delete/{id}', [ArticleController::class, 'destroyarticle'])->name('article.destroyarticle');
        Route::post('/articlestore', [ArticleController::class, 'store'])->name('article.store');
        Route::post('/categorystore', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category', [CategoryController::class, 'view'])->name('category.view');
    });

    Route::get('/', [HomeController::class, 'view']);
    Route::get('/article/{id}', [ArticleController::class, 'viewarticle'])->name('article.viewarticle');
    Route::get('/category/{id}', [CategoryController::class, 'articlesbycategory'])->name('category.articlesbycategory');
});

//USERCONTROLLER
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/create', [UserController::class, 'create'])->name('user.create');
Route::post('/auth', [UserController::class, 'auth'])->name('user.auth');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
