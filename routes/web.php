<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\WriteController;
use App\Http\Controllers\WriteController;
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

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});
Route::get('/writes', [WriteController::class, 'index']);
Route::post('/write', [WriteController::class, 'store']);
Route::get('/write/edit/{id}', [WriteController::class, 'edit']);
Route::post('/write/update/{id}', [WriteController::class, 'update']);
Route::get('/write/delete/{id}', [WriteController::class, 'destroy']);

require __DIR__.'/auth.php';
