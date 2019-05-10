<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipoPersona;
use App\TipoDocumento;
use App\Paises;
use App\Clientes;
use App\Ubigeo;
use DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TipoPersona=TipoPersona::all(); $TipoDocumento=TipoDocumento::all(); $Paises=Paises::all();
        $Clientes=Clientes::with("Ubigeo")->get();
        $Ubigeo["departamento"]= DB::table("ubigeo")->select("departamento")->distinct()->get();
        $Ubigeo["provincia"]= DB::table("ubigeo")->select("provincia", "departamento")->distinct("provincia")->get();
        $Ubigeo["distrito"]= DB::table("ubigeo")->select("distrito", "provincia", "departamento")->distinct("distrito")->get();
        $no_permitidas= array (" ", "ñ", "Ñ","á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
        $permitidas= array ("_", "n", "N","a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");

        return view("maestros.clientes.clientes", ["TipoPersonas" => $TipoPersona, "TipoDocumentos" => $TipoDocumento, "Paises" => $Paises, "Ubigeo" => $Ubigeo,"no_permitidas" => $no_permitidas, "permitidas" => $permitidas, "Clientes" => $Clientes]);
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

        $Ubigeo = Ubigeo::where("distrito", "like", $request->distrito)->first();
        $request->merge($request->except("departamento", "provincia", "distrito"));
        $request->merge(["codigo_ubigeo" => $Ubigeo->id_ubigeo]);

        if ($request->pais!="Perú") $request->merge(["codigo_ubigeo" => NULL]);

        Clientes::create($request->except("departamento", "provincia", "distrito"));
        return "Exito";
    }

    public function listUpdate()
    {
        $TipoPersona=TipoPersona::all(); $TipoDocumento=TipoDocumento::all(); $Paises=Paises::all();
        $Clientes=Clientes::all();
        $Ubigeo["departamento"]= DB::table("ubigeo")->select("departamento")->distinct()->get();
        $Ubigeo["provincia"]= DB::table("ubigeo")->select("provincia", "departamento")->distinct("provincia")->get();
        $Ubigeo["distrito"]= DB::table("ubigeo")->select("distrito", "provincia", "departamento")->distinct("distrito")->get();
        $no_permitidas= array (" ", "ñ", "Ñ","á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
        $permitidas= array ("_", "n", "N","a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");

        return view("maestros.clientes.lista", ["TipoPersonas" => $TipoPersona, "TipoDocumentos" => $TipoDocumento, "Paises" => $Paises, "Ubigeo" => $Ubigeo,"no_permitidas" => $no_permitidas, "permitidas" => $permitidas, "Clientes" => $Clientes]);
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
        

        if ($request->pais!="Perú"){
         $request->merge(["codigo_ubigeo" => NULL]);
        } else{

            $no_permitidas= array (" ", "ñ", "Ñ","á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
        $permitidas= array ("_", "n", "N","a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");

        $request->merge(["distrito" =>  str_replace($no_permitidas, $permitidas, $request->distrito)]);

        $Ubigeo = Ubigeo::where("distrito", "like", $request->distrito)->first();
        $request->merge($request->except("departamento", "provincia", "distrito"));
        $request->merge(["codigo_ubigeo" => $Ubigeo->id_ubigeo]);

        }

        Clientes::where("id", $id)->update($request->except("departamento", "provincia", "distrito", "_method"));
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
        Clientes::where("id", $id)->delete();
    }
}
