<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpendingsController;
use App\Http\Controllers\IncomesController;

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

// 支出のルーティング
Route::resource('spendings', SpendingsController::class);

// 収入のルーティング
Route::resource('incomes', IncomesController::class);