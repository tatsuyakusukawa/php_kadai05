<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoDetailController;
use App\Http\Controllers\TodoCategoryController;



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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TodoController;

// TodoカテゴリとTodo詳細の一覧を表示するRoute
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');



// Todoカテゴリの新規登録画面を表示するRoute
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');

// Todoカテゴリの新規登録をするRoute
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
