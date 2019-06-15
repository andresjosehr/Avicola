<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProductos;
use App\Proveedores;
use App\Productos;
use App\Modulos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $Datos["Proveedores"]=Proveedores::all();
        $Datos["TipoProductos"]=TipoProductos::all();
        $Datos["Productos"]=Productos::with("TipoProducto")->with("Proveedor")->get();
        return view("maestros.productos.productos", ["Datos" => $Datos])->with('Modulos', Modulos::all());
    }



    public function listUpdate()
    {
        $Datos["Proveedores"]=Proveedores::all();
        $Datos["TipoProductos"]=TipoProductos::all();
        $Datos["Productos"]=Productos::with("TipoProducto")->with("Proveedor")->get();
        return view("maestros.productos.lista", ["Datos" => $Datos]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Productos::insert($request->all());
        return "Exito";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Productos::where("id", $id)->update($request->except("_method"));
        return "Exito";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Productos::where("id", $id)->delete();
    }
}
