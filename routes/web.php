<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OddController;
use App\Http\Controllers\EvenController;

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
    return view('welcome');
});

Route::get('/1', [OddController::class, 'get']);
Route::get('/3', [OddController::class, 'get']);
Route::get('/5', [OddController::class, 'get']);
Route::get('/7', [OddController::class, 'get']);
Route::get('/9', [OddController::class, 'get']);

Route::get('/2', [EvenController::class, 'get']);
Route::get('/4', [EvenController::class, 'get']);
Route::get('/6', [EvenController::class, 'get']);
Route::get('/8', [EvenController::class, 'get']);
Route::get('/10', [EvenController::class, 'get']);