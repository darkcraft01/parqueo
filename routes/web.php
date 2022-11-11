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
    return view('auth.login');
});

Auth::routes();

Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');

Route::resource('vehiculos', App\Http\Controllers\VehiculoController::class)->middleware('auth');

Route::resource('cocheras', App\Http\Controllers\CocheraController::class)->middleware('auth');

Route::resource('funcionarios', App\Http\Controllers\FuncionarioController::class)->middleware('auth');

Route::resource('estadias', App\Http\Controllers\EstadiaController::class)->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
