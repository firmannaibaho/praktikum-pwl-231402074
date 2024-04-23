<?php


use App\Http\Controllers\TodoTaskController;
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

Route::get('/', [TodoTaskController::class, 'index']);
// routes/web.php
Route::delete('/task/{id}', 'TaskController@delete')->name('deleteTask');

route::post('/', [TodoTaskController::class, 'tambah']);
Route::delete('/tasks/{task}', [TodoTaskController::class, 'destroy'])->name('delete');
