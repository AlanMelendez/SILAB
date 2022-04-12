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

//Luberacion Alumnos
Route::get('/iniciarliberacion', [alumnosController::class, 'show']);
Route::get('/consultarAdeudo', [alumnosController::class, 'consultaA']);

Route::get('/generarReporte', 'FinancierosController@show');

//Prestamos
Route::get('/cosnultarAdeudoAlumno', [prestamosController::class,'consultaAdeudoAlumno']);
Route::get('/todosPrestamos', [prestamosController::class,'todosPrestamos']);

//Liberacion Docentes
Route::get('/comprobanteLiberacion', [LiberacionesController::class,'Mostrar_Liberados']);
Route::get('/Liberacion2', [Liberacion2Controller::class,'Liberados2xd']);


//Ayuda
Route::get('/mostrarAyuda', [ayudaController::class,'mostrarAyuda']);

Route::get('/informacionLaboratorios', 'laboratoristasController@show');

Route::get('/consultarArticulos', [laboratoristasController::class, 'mostrarArticulos']);


//Todos registros
Route::get('/todosRegistros',  [prestamosController::class,'showRegistros']);


