<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\Admin\IndexController as AdminController;

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

//Route::get('/', function () {
//    return view('index');
//});

// Route::view('/', 'index'); //это еще вариант записи


Route::get('/', [HomeController::class, 'index'])->name('home');


//Route::get('/about', function () {
//    return view('about');
//});

Route::view('/about', 'about')->name('about');
//->name('about') - это псевдоним для использования в шаблоне view для обозначения того урла,
// который задается здесь в первых кавычках: view('/about')

//Route::get('/news', function () {
//    return view('news');
//});

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/one/{id}', [NewsController::class, 'show'])->where('id', '[0-9]+')->name('one');
Route::get('/news/categories', [CategoryController::class, 'index'])->name('news.categories');
Route::get('/news/category/{title}', [CategoryController::class, 'show'])->name('news.category');

// Сгруппировать маршруты для admin
Route::name('admin.') //задать префикс для имени-псевдонима в ссылке меню: то есть выглядит как бы так ->name('admin.index')
    ->prefix('admin') // а это часть идет как префикс для uri, там где сейчас '/' автоматом становится '/admin',
    // где сейчас в uri '/test1' - автоматически подставится префикс, чтобы получилось '/admin/test1'
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/test1', [AdminController::class, 'test1'])->name('test1');
        Route::get('/test2', [AdminController::class, 'test2'])->name('test2');
    });

