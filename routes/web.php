<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
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
    return view('welcome');
});


Route::get('/second', [TestController::class,'show']);
Route::get('/home', [MainController::class,'showindex']);
Route::get('/array', [MainController::class,'showarray']);
route::get('/array/shuffle', [MainController::class,'mixarray']);
Route::get('/array/sort', [MainController::class, 'sortArray']);
Route::get('/array/filter', [MainController::class, 'filterArray']);