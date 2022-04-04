<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\IndexController as AdminController;


Route::get('/', [IndexController::class, 'index'])->name('index');

Route::match(['get', 'post'],'/about', [AboutController::class, 'index'])->name('about');
//->name('about') - это псевдоним для использования в шаблоне view для обозначения того урла,
// который задается здесь в первых кавычках: view('/about')

//Route::get('/news', [NewsController::class, 'index'])->name('news.index');
//Route::get('/news/one/{id}', [NewsController::class, 'show'])->where('id', '[0-9]+')->name('news.one');
//Route::get('/news/categories', [CategoryController::class, 'index'])->name('news.category.index');
////Route::get('/news/category/{id}', [CategoryController::class, 'show'])->name('news.category.show');
//Route::get('/news/category/{slug}', [CategoryController::class, 'show'])->name('news.category.show');

    // Эту группу роутов, которые начинаются c news, необходимо сгруппировать следующим образом:

Route::name('news.')
    ->prefix('news')
    ->group(function() {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/one/{id}', [NewsController::class, 'show'])->where('id', '[0-9]+')->name('one');

        Route::name('category.')
            ->group(function () {
                Route::get('/categories', [CategoryController::class, 'index'])->name('index');
//Route::get('/news/category/{id}', [CategoryController::class, 'show'])->name('news.category.show');
                Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('show');
            });

    });

// Сгруппировать маршруты для admin
Route::name('admin.') //задать префикс для имени-псевдонима в ссылке меню: то есть выглядит как бы так ->name('admin.index')
    ->prefix('admin') // а это часть идет как префикс для uri, там где сейчас '/' автоматом становится '/admin',
    // где сейчас в uri '/test1' - автоматически подставится префикс, чтобы получилось '/admin/test1'
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
        Route::get('/news', [AdminController::class, 'news'])->name('news');
        Route::get('/test1', [AdminController::class, 'test1'])->name('test1');
        Route::get('/test2', [AdminController::class, 'test2'])->name('test2');

        Route::name('category.')
        ->prefix('category')
        ->group(function() {
            Route::match(['get', 'post'], '/create', [AdminCategoryController::class, 'create'])->name('create');
            Route::match(['get', 'post'],'/edit', [AdminCategoryController::class, 'edit'])->name('edit');
        });

        Route::name('news.')
        ->prefix('news')
        ->group(function() {
            Route::match(['get', 'post'], '/create', [AdminNewsController::class, 'create'])->name('create');
            Route::get('/edit', [AdminNewsController::class, 'edit'])->name('edit');
        });
    });

Route::get('/login', [LoginController::class, 'index'])->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

