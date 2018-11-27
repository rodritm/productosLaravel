<?php

use Illuminate\Http\Request; //esto se debe importar para llamar al método Request que permite almacenar en la base de datos
use App\Product; //esto siempre se debe importar para guardar los cambios en el modelo deseado
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
    //$products = Product::all();
    $products = Product::orderby('created_at','desc')->get();
    return view('products.index',compact('products'));
})->name('products.index');

Route::get('products/create', function () {
    return view('products.create');
})->name('products.create');

Route::post('products', function (Request $request) {
    $newProduct = new Product;
     $newProduct -> description = $request -> input('description'); //el input('description') nos permite obtener lo que se haya puesto en el html en el campo con nombre description 
     $newProduct -> price = $request -> input('price'); 
     $newProduct -> save();
     return redirect() -> route('products.index') -> with('info','Producto creado exitosamente');
})->name('products.store');
