<?php

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
    return view('welcome');
});

Route::get('/semanas/todas',function(){

    $semanas = Semana::all();
    return $semanas;

});

Route::get('/semanas/{id}',function($id){

    $semana = Semana::find($id);
    if($semana == null){
        return 'id inválido';
    }
    return $semana;

});



