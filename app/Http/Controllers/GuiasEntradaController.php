<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProductos;
use App\Proveedores;
use App\Productos;
use App\GuiasEntrada;

class GuiasEntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos["TipoProductos"]= TipoProductos::all();
        $Datos["Proveedores"]= Proveedores::all();
        $Datos["GuiasEntrada"]= GuiasEntrada::with("Proveedor")->with("Productos")->get();
        return view("guias.guiasEntrada.guiasEntrada", ["Datos" => $Datos]);
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

        GuiasEntrada::insert($request->only("descripcion_guia", "fecha_ingreso", "id_proveedor", 'fecha_entrada'));
        $GuiasEntrada=GuiasEntrada::orderBy("id", "DESC")->first();
        $Productos = json_decode($request->Productos, true);
        foreach ($Productos as $Producto) {
            $Producto["id_guia_entrada"]=$GuiasEntrada->id;
            Productos::insert($Producto);
        }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
