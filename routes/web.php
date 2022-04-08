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
use App\Http\Controllers\prestamosContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('panel-control');
});

Route::get('/iniciarliberacion', [alumnosController::class, 'show']);

Route::get('/consultarAdeudo', [alumnosController::class, 'consultaA']);


Route::get('/cosnultarAdeudoAlumno', [prestamosContoller::class,'consultaAdeudoAlumno']);
Route::get('/todosPrestamos', [prestamosContoller::class,'todosPrestamos']);
