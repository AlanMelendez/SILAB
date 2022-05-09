<?php

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

use App\Http\Controllers\alumnosController;
use App\Http\Controllers\Liberacion2Controller;
use App\Http\Controllers\laboratoristasController;
use App\Http\Controllers\ayudaController;
use App\Http\Controllers\LiberacionesController;
use App\Http\Controllers\prestamosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('panel-control');
});

//Liberacion Alumnos
Route::get('/iniciarliberacion', [alumnosController::class, 'show']);
Route::get('/consultarAdeudo', [alumnosController::class, 'consultaAdeudo']);

Route::get('/generarReporte', 'FinancierosController@show');

//Prestamos
Route::get('/cosnultarAdeudoAlumno', [prestamosController::class,'consultaAdeudoAlumno']);
Route::get('/todosPrestamos', [prestamosController::class,'todosPrestamos']);
Route::get('/agregarPrestamo', [prestamosController::class,'agregarPrestamo']);
Route::get('/prestamosTerminados', [prestamosController::class,'prestamosTerminados']);
Route::get('/tramitesTerminados', [prestamosController::class,'tramitesTerminados']);

//Liberacion Docentes
Route::get('/comprobanteLiberacion', [LiberacionesController::class,'mostrar_pendientes']);
Route::get('/mostrarLiberados', [LiberacionesController::class,'mostrar_liberados']);
Route::get('/comprobantesCancelados', [LiberacionesController::class,'mostrar_cancelados']);



//Ayuda
Route::get('/mostrarAyuda', [ayudaController::class,'mostrarAyuda']);

Route::get('/informacionLaboratorios', 'laboratoristasController@show');

Route::get('/consultarArticulos', [laboratoristasController::class, 'mostrarArticulos']);
Route::get('/consultarArticulosMenores', [laboratoristasController::class, 'mostrarArticulosMenores']);



//Todos registros
Route::get('/todosRegistros',  [prestamosController::class,'showRegistros']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
