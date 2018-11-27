<?php

use Illuminate\Http\Request;
use App\Product;
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

Route::get('products', function () {
    return view('products.index');
})->name('products.index');

Route::get('products/create', function () {
    return view('products.create');
})->name('products.create');

Route::post('products', function (Request $request) {
    $newProduct = new Product;
     $newProduct -> description = $request -> input('description'); //el input('description') nos permite obtener lo que se haya puesto en el html en el campo con nombre description 
     $newProduct -> price = $request -> input('price'); 
     $newProduct -> save();
})->name('products.store');
