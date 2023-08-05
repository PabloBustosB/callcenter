<?php
use Livewire\Livewire;
use App\Http\Controllers\AsistenteController;
use App\Http\Controllers\OrdenTrabajoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InteraccionController;
use App\Http\Controllers\FacturaController;
use App\Http\Livewire\ChatModal;


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
    return view('login');
});

Route::view('/login', 'login')->name('login');
Route::view('/registro', 'registro')->name('registro');
// Route::view('/home', 'home')->name('home');
Route::view('/home', 'home')->middleware('auth')->name('home');
// Route::view('/asistente', 'asistente.index')->middleware('auth')->name('asistente');
Route::resource('asistente', App\Http\Controllers\AsistenteController::class)->middleware('auth');

Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::resource('planinternets', App\Http\Controllers\PlaninternetController::class)->middleware('auth');
Route::resource('tecnicos', App\Http\Controllers\TecnicoController::class)->middleware('auth');
Route::resource('plan-tv-cables', App\Http\Controllers\PlanTvCableController::class)->middleware('auth');
Route::resource('plan-llamadas', App\Http\Controllers\PlanLlamadaController::class)->middleware('auth');
Route::resource('tipo-servicios-tecnicos', App\Http\Controllers\TipoServiciosTecnicoController::class)->middleware('auth');


Route::view('/prueba', 'asistente.prueba')->name('prueba');

Route::get('/reporte/ordenSoporte',[App\Http\Controllers\InteraccionController::class,'pdf'])->name('reporte.orden_soporte' );

Route::view('/prueba', 'asistente.pdf_soporte_internet')->name('prueba');

Route::get('/consultar-ordenes', [OrdenTrabajoController::class, 'consultarOrdenesPorFecha'])->name('procesar.formulario');

Route::get('/consultar-interacciones', [InteraccionController::class, 'reporteInteraccion'])->name('procesar.reporte');

Route::get('/consultar-factura', [FacturaController::class, 'reporteFactura'])->name('procesar.factura');

Route::get('/interacciones', [InteraccionController::class, 'index'])->name('interacciones.index');

Route::get('/chat-modal', ChatModal::class);


