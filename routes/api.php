<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('all', [\App\Http\Controllers\TasksController::class, 'index']);
Route::post('create', [\App\Http\Controllers\TasksController::class, 'store']);
Route::put('update/{task}', [\App\Http\Controllers\TasksController::class, 'update']);
Route::delete('delete/{task}', [\App\Http\Controllers\TasksController::class, 'destroy']);
Route::put('complete/{task}', [\App\Http\Controllers\TasksController::class, 'complete']);
