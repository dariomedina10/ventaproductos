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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('Index_Productos');
Route::get('/Productos/nuevo', [App\Http\Controllers\ProductoController::class, 'create'])->name('Ingresar_Productos');
Route::post('/Productos/guardar', [App\Http\Controllers\ProductoController::class, 'store'])->name('Guardar_Producto');
Route::get('editar-registro/{id}',[App\Http\Controllers\ProductoController::class, 'edit'])->name('Editar_producto');
Route::post('/Productos/actualizar/{id}', [App\Http\Controllers\ProductoController::class, 'update'])->name('Actualizar_Producto');
Route::delete('/Productos/eliminar/{id}', [App\Http\Controllers\ProductoController::class, 'destroy'])->name('Eliminar_Producto');
Route::get('/Facturas', [App\Http\Controllers\FacturaController::class, 'index'])->name('Index_Facturas');
Route::get('/Facturas/nuevo', [App\Http\Controllers\FacturaController::class, 'create'])->name('Guardar_Factura');

