<?php

use App\Http\Controllers\TodoController;
use App\Models\TodoList;
use Illuminate\Support\Facades\Route;

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
    return view('todo.index');
});

Route::get('todo', [
    TodoController::class, 'index'
])->name('todo.index');

Route::get('todo/create', [
    TodoController::class, 'create'
])->name('todo.create');

Route::post('todo/store', [
    TodoController::class, 'store'
])->name('todo.store');

Route::delete('todo/delete/{id}', [
    TodoController::class, 'destroy'
])->name('todo.delete');

Route::get('todo/edit/{id}', [
    TodoController::class, 'edit'
])->name('todo.edit');

Route::put('todo/update/{id}', [
    TodoController::class, 'update'
])->name('todo.update');



// Route::get('todo/create', function () {
//     return view('todo.create');
// });

// Route::get('todo/edit', function () {
//     return view('todo.edit');
// });

// Route::get('todo/update', function () {
//     return view('todo.update');
// });

// Route::get('todo/delete', function () {
//     return view('todo.delete');
// });
