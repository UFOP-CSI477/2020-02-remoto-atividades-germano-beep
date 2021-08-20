<?php

use App\Http\Controllers\AlimentationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeekController;
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
use App\Models\Semana;

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/weeks', WeekController::class);
Route::resource('/alimentations', AlimentationController::class);
Route::resource('/users', UserController::class);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
