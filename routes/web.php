<?php
use App\Modulos;
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

Route::group(['middleware' => ['VerificarSesion', 'Seguridad']], function () {
Route::get('/', function () {
	    return view('escritorio')->with('Modulos', Modulos::orderBy("descripcion", "asc")->get());
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

	Route::resource('automoviles', "AutomovilesController");
	Route::post('automoviles/listUpdate', "AutomovilesController@listUpdate");

	Route::resource('empleados', "EmpleadosController");
	Route::post('empleados/listUpdate', "EmpleadosController@listUpdate");
	Route::post('empleados/crearCuenta', "EmpleadosController@crearCuenta");

	Route::resource('choferes', "ChoferesController");
	Route::post('choferes/listUpdate', "ChoferesController@listUpdate");

	Route::resource('cargos', "CargosController");
	Route::post('cargos/listUpdate', "CargosController@listUpdate");

	Route::resource('categorias', "CategoriasController");
	Route::post('categorias/listUpdate', "CategoriasController@listUpdate");

	Route::resource('tipo_productos', "TipoProductosController");
	Route::post('tipo_productos/listUpdate', "TipoProductosController@listUpdate");

	Route::resource('productos', "ProductosController");
	Route::post('productos/listUpdate', "ProductosController@listUpdate");

	Route::resource('guias-entrada', "GuiasEntradaController");
	Route::post('guias-entrada/listUpdate', "GuiasEntradaController@listUpdate");


	Route::resource('guias-salida', "GuiaSalidaController");
	Route::post('guias-salida/listUpdate', "GuiaSalidaController@listUpdate");
	Route::post('guias-salida/listUpdateProductos', "GuiaSalidaController@listUpdateProductos");
	Route::post('guias-salida/listUpdateProductosEditar', "GuiaSalidaController@listUpdateProductosEditar");


	Route::resource('guias-pedido', "GuiasPedidoController");
	Route::post('guias-pedido/listUpdate', "GuiasPedidoController@listUpdate");
	Route::post('guias-pedido/listUpdateProductos', "GuiasPedidoController@listUpdateProductos");
	Route::post('guias-pedido/listUpdateProductosEditar', "GuiasPedidoController@listUpdateProductosEditar");
	Route::post('guias-pedido/crearProducto', "GuiasPedidoController@crearProducto");

	Route::post('ver-guia-salida/{id}', "GuiasPedidoController@VerGuia");



	Route::resource('liquidacion', "LiquidacionController");


	Route::resource('grupos-usuarios', "GruposUsuariosController");
	Route::post('grupos-usuarios/listUpdate', "GruposUsuariosController@listUpdate");


	Route::resource('almacen', "AlmacenController");

	


});


	Route::get('prueba', "PruebaController@index");

