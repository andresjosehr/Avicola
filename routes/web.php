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

Route::get('/', function () {
    return view('escritorio');
});

Route::resource('guia-salida', "GuiaSalidaController");
Route::resource('mantenedores', "MantenedoresController");
Route::resource('clientes', "ClientesController");
Route::post('clientes/listUpdate', "ClientesController@listUpdate");
