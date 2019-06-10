<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProductos;
use App\Proveedores;
use App\Productos;
use App\GuiasEntrada;
use App\UnidadesProductos;

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
        $Datos["Productos"]= Productos::all();
        $Datos["Proveedores"]= Proveedores::all();
        $Datos["GuiasEntrada"]= GuiasEntrada::with("Proveedor")->with("Producto")->with("UnidadesProductos")->get();
        return view("guias.guiasEntrada.guiasEntrada", ["Datos" => $Datos]);
    }

    public function listUpdate()
    {
        $Datos["TipoProductos"]= TipoProductos::all();
        $Datos["Productos"]= Productos::all();
        $Datos["Proveedores"]= Proveedores::all();
        $Datos["GuiasEntrada"]= GuiasEntrada::with("Proveedor")->with("UnidadesProductos")->get();
        return view("guias.guiasEntrada.lista", ["Datos" => $Datos]);
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


        GuiasEntrada::insert($request->only("descripcion_guia", "id_proveedor", 'fecha_entrada', 'id_producto'));
        $GuiaEntrada=GuiasEntrada::orderBy("id", "DESC")->first();
        
        foreach ($request->except("descripcion_guia", "id_proveedor", 'fecha_entrada', "unidades", "id_producto") as $Producto => $val) {
            UnidadesProductos::insert(["id_guia_entrada" => $GuiaEntrada->id, "estatus" => 0, "peso" => $val]);

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
        GuiasEntrada::where("id", $id)->update($request->only("descripcion_guia", "id_proveedor", 'fecha_entrada', 'id_producto'));
        
        UnidadesProductos::where("id_guia_entrada", $id)->delete();

        foreach ($request->except("descripcion_guia", "id_proveedor", 'fecha_entrada', "unidades", "id_producto", "_method", "id") as $Producto => $val) {
            UnidadesProductos::insert(["id_guia_entrada" => $id, "estatus" => 0, "peso" => $val]);

        }
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
        UnidadesProductos::where("id_guia_entrada", $id)->delete();
        GuiasEntrada::where("id", $id)->delete();
    }
}
