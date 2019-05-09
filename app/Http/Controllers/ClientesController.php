<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipoPersona;
use App\TipoDocumento;
use App\Paises;
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

        $Ubigeo["departamento"]= DB::table("ubigeo")->select("departamento")->distinct()->get();
        $Ubigeo["provincia"]= DB::table("ubigeo")->select("provincia", "departamento")->distinct("provincia")->get();
        $Ubigeo["distrito"]= DB::table("ubigeo")->select("distrito", "provincia")->distinct("distrito")->get();

        return view("maestros.clientes.clientes", ["TipoPersonas" => $TipoPersona, "TipoDocumentos" => $TipoDocumento, "Paises" => $Paises, "Ubigeo" => $Ubigeo]);
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
        return $request;
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
