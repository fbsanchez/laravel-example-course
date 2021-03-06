<?php

use Carbon\Carbon;
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

Route::get('/', [\App\Http\Controllers\Controller::class, 'hola']);
Route::get('/hola', [\App\Http\Controllers\Controller::class, 'hola'])->name('hola');

Route::get('/fecha', function () {
    $now = Carbon::now();
    return view('fecha', ['now' => $now]);
})->name('fecha');

Route::match(
    ['GET', 'POST'],
    '/edad',
    [\App\Http\Controllers\EdadController::class, 'go']
)->name('edad');

Route::match(
    ['GET', 'POST'],
    '/cumple',
    [\App\Http\Controllers\CumpleController::class, 'go']
)->name('cumple');


Route::resource('/categorias', \App\Http\Controllers\CategoriaController::class);
Route::resource('/productos', \App\Http\Controllers\ProductoController::class);
