<?php

use App\Http\Controllers\Task;

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
Route::get('/', [Task::class, 'tasks'])->name('tasks');
Route::get('/add/task', [Task::class, 'AddTask'])->name('AddTask');
Route::post('/store', [Task::class, 'store'])->name('store');
Route::get('/edit/task/{id}', [Task::class, 'EditTask'])->name('EditTask');
Route::post('/edit', [Task::class, 'edit'])->name('edit');
Route::get('/delete/task/{id}', [Task::class, 'DeleteTask'])->name('DeleteTask');


