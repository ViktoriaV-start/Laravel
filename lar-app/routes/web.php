<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Admin\IndexController as AdminController;


        //Route::get('/', function () {
        //    return view('index');
        //});

        // Route::view('/', 'index'); //это еще вариант записи

Route::get('/', [IndexController::class, 'index'])->name('index');

        //Route::get('/about', function () {
        //    return view('about');
        //});

Route::view('/about', 'about')->name('about');
//->name('about') - это псевдоним для использования в шаблоне view для обозначения того урла,
// который задается здесь в первых кавычках: view('/about')

        //Route::get('/news', function () {
        //    return view('news');
        //});

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
        Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
//Route::get('/news/category/{id}', [CategoryController::class, 'show'])->name('news.category.show');
        Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
    });

// Сгруппировать маршруты для admin
Route::name('admin.') //задать префикс для имени-псевдонима в ссылке меню: то есть выглядит как бы так ->name('admin.index')
    ->prefix('admin') // а это часть идет как префикс для uri, там где сейчас '/' автоматом становится '/admin',
    // где сейчас в uri '/test1' - автоматически подставится префикс, чтобы получилось '/admin/test1'
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/test1', [AdminController::class, 'test1'])->name('test1');
        Route::get('/test2', [AdminController::class, 'test2'])->name('test2');


        Route::get('/category.add', [AdminController::class, 'categoryAdd'])->name('category.add');
        Route::get('/category.update', [AdminController::class, 'categoryUpdate'])->name('category.update');
        Route::get('/news.add', [AdminController::class, 'categoryAdd'])->name('news.add');
        Route::get('/news.update', [AdminController::class, 'categoryUpdate'])->name('news.update');
    });

Route::get('/login', [LoginController::class, 'index'])->name('login');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

