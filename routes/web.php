<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::view('/login', 'login')->name('login');
Route::view('/registro', 'registro')->name('registro');
Route::view('/home', 'home')->middleware('auth')->name('home');

Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::resource('planinternets', App\Http\Controllers\PlaninternetController::class);
Route::resource('tecnicos', App\Http\Controllers\TecnicoController::class);
Route::resource('plan-tv-cables', App\Http\Controllers\PlanTvCableController::class);
Route::resource('plan-llamadas', App\Http\Controllers\PlanLlamadaController::class);
Route::resource('tipo-servicios-tecnicos', App\Http\Controllers\TipoServiciosTecnicoController::class);


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
