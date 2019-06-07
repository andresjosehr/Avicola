<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProductos;
use App\Proveedores;
use App\Productos;
use App\Clientes;
use App\GuiasPedido;

class GuiasPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos["TipoProductos"]= TipoProductos::all();
        $Datos["Clientes"]= Clientes::all();
        $Datos["Productos"]= Productos::all();
        $Datos["GuiasPedido"]= GuiasPedido::with("Cliente")->with("Productos")->get();
        return view("guias.guiasPedido.guiasPedido", ["Datos" => $Datos]);
    }

    public function listUpdate()
    {
        $Datos["TipoProductos"]= TipoProductos::all();
        $Datos["Clientes"]= Clientes::all();
        $Datos["Productos"]= Productos::all();
        $Datos["GuiasPedido"]= GuiasPedido::with("Cliente")->with("Productos")->get();
        return view("guias.guiasPedido.lista", ["Datos" => $Datos]);
    }


    public function listUpdateProductos()
    {
        $Datos["Productos"]= Productos::all();
        return view("guias.guiasPedido.productos", ["Datos" => $Datos]);
    }


    public function listUpdateProductosEditar()
    {
        $Datos["Productos"]= Productos::all();
        return view("guias.guiasPedido.productosEditar", ["Datos" => $Datos]);
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
        GuiasPedido::insert($request->only("descripcion_guia", "fecha_entrega", "id_cliente"));
        $GuiasPedido=GuiasPedido::orderBy("id", "DESC")->first();

        foreach (explode(",", $request->productos) as $Producto) {
            Productos::where("id", $Producto)->update(["estatus" => 2, "id_guia_pedido" => $GuiasPedido->id]);
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
        GuiasPedido::where("id", $id)->update($request->only("descripcion_guia", "fecha_entrega", "id_cliente"));

        Productos::where("id_guia_pedido",  $id)->update(["estatus" => 1, "id_guia_pedido" => 0 ]);

        foreach (explode(",", $request->productos) as $Producto) {
            Productos::where("id", $Producto)->update(["estatus" => 2, "id_guia_pedido" => $id]);
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
        GuiasPedido::where("id", $id)->delete();
        Productos::where("id_guia_pedido",  $id)->update(["estatus" => 1, "id_guia_entrada" => 0 ]);
    }
}
