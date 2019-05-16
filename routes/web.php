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

// Route::get('/', function () {
//     return view('escritorio');
// });

Route::get('acceso', function () {
	if (session()->get("id")) {
            return redirect("/");
        } else{
        	return view("seguridad.login");
        }
});

Route::get('CerrarSesion', function(){
	session()->forget('sesion');
	session()->forget('email');
	session()->forget('id');
	session()->forget('nombre');
    return redirect("/");
});


Route::post('login', "SeguridadController@login");

Route::post('resetPass', "SeguridadController@resetPass");
Route::get('resetPass/{codigo}', "SeguridadController@resetPass2");
Route::post('resetPass2/{codigo}', "SeguridadController@resetPass3");

Route::get('resetPass', function(){
	return view("seguridad.resetPass");
});
Route::post('login', "SeguridadController@login");

Route::group(['middleware' => ['VerificarSesion']], function () {
Route::get('/', function () {
	    return view('escritorio');
	});


	Route::resource('guia-salida', "GuiaSalidaController");
	Route::resource('mantenedores', "MantenedoresController");

	Route::resource('clientes', "ClientesController");
	Route::post('clientes/listUpdate', "ClientesController@listUpdate");

	Route::resource('proveedores', "ProveedoresController");
	Route::post('proveedores/listUpdate', "ProveedoresController@listUpdate");


	Route::resource('contactos', "ContactosController");
	Route::post('contactos/listUpdate', "ContactosController@listUpdate");

	Route::resource('usuarios', "UsuariosController");
	Route::post('usuarios/listUpdate', "UsuariosController@listUpdate");
	


});

