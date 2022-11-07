<?php

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


Route::get('/', [App\Http\Controllers\HomeController::class,'index']);


Route::resource('dashboard', App\Http\Controllers\HomeController::class);
Route::resource('users', App\Http\Controllers\UsersController::class);
Route::resource('tasks', App\Http\Controllers\TasksController::class);
Route::resource('taskcategories', App\Http\Controllers\TaskCategoriesController::class);
// Route::resource('index', App\Http\Controllers\BookController::class);
Auth::routes();


Route::post('/tasks', [App\Http\Controllers\TasksController::class, 'index'])->name('search');
Route::post('/tasks/create', [App\Http\Controllers\TasksController::class, 'create'])->name('index');
Route::post('/tasks', [App\Http\Controllers\TasksController::class, 'search'])->name('search');
Route::post('/tasks/store', [App\Http\Controllers\TasksController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{task}/start', [App\Http\Controllers\TasksController::class, 'start'])->name('tasks.start');
Route::get('/tasks/{task}/end', [App\Http\Controllers\TasksController::class, 'end'])->name('tasks.end');


    // Route::post('/tasks',[App\Http\Controllers\HomeController::class, 'twoButtonsResult'])->name('tasks');

// Route::post('/users', [App\Http\Controllers\UsersController::class, 'serch'])->name('serch');
// Route::post('/users/store', [App\Http\Controllers\UsersController::class, 'store'])->name('serch');


