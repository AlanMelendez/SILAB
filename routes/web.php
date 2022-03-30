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

Route::get('/', function () {
    return view('panel-control');
});

Route::get('/iniciarliberacion', [alumnosController::class, 'show']);

Route::get('/consultarAdeudo', [alumnosController::class, 'consultaA']);
