<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorryController;


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
Route::get('/products', [ProductController::class,'index']);


Route::get('/products/create', [ProductController::class,'create']);
Route::post('/products/create', [ProductController::class,'store'])->name('create');

Route::get('/products/edit/{product}', [ProductController::class,'edit']);
Route::put('/products/update/{product}', [ProductController::class,'update'])->name('update');


Route::get('/Categorry/create', [CategorryController::class,'create']);
Route::post('/Categorry/create', [CategorryController::class,'store'])->name('create_categorry');

Route::get('/Categorry/edit/{categorry}', [CategorryController::class,'edit']);
Route::put('/Categorry/update/{categorry}', [CategorryController::class,'update'])->name('update_categorry');


// Route::get('/products/create', [CategorryController::class,'create']);
