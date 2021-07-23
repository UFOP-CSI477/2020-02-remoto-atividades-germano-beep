<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\UserController;

use App\Models\Produto;
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

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/produtos', ProdutoController::class);
Route::resource('/compras', CompraController::class);
Route::resource('/users', UserController::class);


// Route::get('/produtos/todos', function (){
//     $produtos = Produto::all();

//     return view('lista',['dados' => $produtos]);
// });

// Route::get('/produtos/{id}', function($id){
//     $produto =  Produto::find($id);

//     if ($produto == null) {
//         return 'id inválido';
//     }

//     return view('lista',['dados' => $produto]);


// });
