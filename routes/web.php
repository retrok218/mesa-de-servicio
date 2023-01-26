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

//  Route::get('/', function () {
//      return view('welcome');
//  });

Route::get('/','MesaController@mesa_index_controller');
Route::get('/inicio','MesaController@mesa_inicio_controller');
Route::get('/formatos','MesaController@formato_controller');
// Route::get();
// Route::get();
// Route::get();