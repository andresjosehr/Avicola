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
use App\VentasGuiaPedido;

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
        // $Datos["Productos"] = Productos::all();
        $Datos["GuiasPedido"]= GuiasPedido::with("GuiaSalida")->with("Ventas")->get();
        $Datos["Clientes"]= Clientes::all();
        $Datos["UnidadesProductos"] = UnidadesProductos::with("Producto")->with("GuiaEntrada.Proveedor")->get();
        $Datos["Choferes"] = Empleados::where("chofer", "Si")->get();
        $Datos["Empleados"] = Empleados::all();

        $Datos["GuiasSalida"] = GuiasSalida::with("Cliente")->with("UnidadesProductos.Producto")->with("GuiaPedido")->get();

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

    public function VerGuia($id)
    {
        $Datos["GuiaPedido"]= GuiasPedido::where("id", $id)->with("GuiaSalida")->with("Ventas.ClienteN")->first();

        return view("guias.guiasPedido.editar", ["Datos" => $Datos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         GuiasPedido::insert([
            "descripcion_guia"     => $request->descripcion_guia_pedido,
            "fecha_entrega"        => $request->fecha_entrega_guia_salida,
            "id_guia_salida"       => $request->id_guia_salida,
            "merma_total"          => $request->merma,
            "peso_total_vendido"   => $request->peso_vendido,
            "precio_total_vendido" => $request->precio_vendido,
            "cartones_devueltos"   => $request->cartones,
         ]);

         $Guia=GuiasPedido::orderBy("id", "DESC")->first();

         for ($i=1; $i <100 ; $i++) { 
             if ($request->only("peso_".$i)!=null) {

                 VentasGuiaPedido::insert([
                    "id_guia_pedido" => $Guia->id,
                    "cliente"        => $request->only("cliente_".$i)["cliente_".$i],
                    "precio"         => $request->only("preciorango_".$i)["preciorango_".$i],
                    "peso"           => $request->only("peso_".$i)["peso_".$i],
                    "precio_vendido" => $request->only("preciovendido_".$i)["preciovendido_".$i],
                 ]);

             } else{
                break;
             }
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