<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProductos;
use App\Proveedores;
use App\Productos;
use App\UnidadesProductos;
use App\Clientes;
use App\GuiasPedido;
use App\GuiasSalida;
use App\Empleados;
use App\Modulos;

class GuiasPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {           
        // $Datos["TipoProductos"]= TipoProductos::all();
        $Datos["Clientes"]= Clientes::all();
        $Datos["UnidadesProductos"] = UnidadesProductos::with("Producto")->with("GuiaEntrada.Proveedor")->get();
        // $Datos["Productos"] = Productos::all();
        $Datos["Choferes"] = Empleados::where("chofer", "Si")->get();
        $Datos["Empleados"] = Empleados::all();
        // $Datos["GuiasPedido"]= GuiasPedido::with("Cliente")->with("UnidadesProductos")->get();


        $Datos["GuiasSalida"] = GuiasSalida::with("Cliente")->with("UnidadesProductos")->with("GuiaPedido")->get();

        return view("guias.guiasPedido.guiasPedido", ["Datos" => $Datos])->with('Modulos', Modulos::all());
    }

    public function listUpdate()
    {
        // $Datos["TipoProductos"]= TipoProductos::all();
        $Datos["Clientes"]= Clientes::all();
        $Datos["UnidadesProductos"] = UnidadesProductos::with("Producto")->with("GuiaEntrada.Proveedor")->get();
        // $Datos["Productos"] = Productos::all();
        $Datos["Choferes"] = Empleados::where("chofer", "Si")->get();
        $Datos["Empleados"] = Empleados::all();
        // $Datos["GuiasPedido"]= GuiasPedido::with("Cliente")->with("UnidadesProductos")->get();


        $Datos["GuiasSalida"] = GuiasSalida::with("Cliente")->with("UnidadesProductos")->with("GuiaPedido")->get();
        return view("guias.guiasPedido.lista", ["Datos" => $Datos]);
    }


    public function listUpdateProductos()
    {
        $Datos["UnidadesProductos"] = UnidadesProductos::with("Producto")->with("GuiaEntrada.Proveedor")->get();
        return view("guias.guiasPedido.productos", ["Datos" => $Datos]);
    }


    public function listUpdateProductosEditar()
    {
        $Datos["UnidadesProductos"] = UnidadesProductos::with("Producto")->with("GuiaEntrada.Proveedor")->get();
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

         GuiasPedido::insert($request->only("descripcion_guia", "fecha_entrega", "id_automovil", "id_cliente", "id_empleado", "id_guia_salida", "merma_total", "peso_total", "peso_total_vendido", "precio_total"));

        foreach (json_decode($request->productos, true) as $key => $value) {

            $value["id_guia_pedido"] = $request->id_guia_salida;
            $value["estatus"] = 2;
            UnidadesProductos::where("id", $key)->update($value);
        }

        if ($request->producto_anadido!=null) {
            $ProPro=UnidadesProductos::where("id" ,$request->producto_anadido)->first();

            UnidadesProductos::where("id" ,$request->producto_anadido)->update([
                "peso" => $ProPro->peso+$request->peso_sobrante,
            ]);

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

        UnidadesProductos::where("id_guia_pedido",  $id)->update(["estatus" => 0, "id_guia_pedido" => 0 ]);

        foreach (explode(",", $request->productos) as $Producto) {
            UnidadesProductos::where("id", $Producto)->update(["estatus" => 1, "id_guia_pedido" => $id]);
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
        UnidadesProductos::where("id_guia_pedido",  $id)->update(["estatus" => 0, "id_guia_pedido" => 0 ]);
    }



    public function crearProducto(Request $request)
    {

        $Unidad=UnidadesProductos::where("id_guia_salida", $request->id_guia_salida)->first();

        UnidadesProductos::insert([
            "peso" => $request->peso,
            "estatus" => 0,
            "id_guia_entrada" =>$Unidad->id_guia_entrada,
        ]);
    }
}