<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Automoviles;
use App\Empleados;

class AutomovilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos["Automoviles"]=Automoviles::with("Chofer")->get();
        $Datos["Choferes"]=Empleados::where("chofer", "Si")->get();
        return view("maestros.automoviles.automoviles", ["Datos" => $Datos]);
    }

    public function listUpdate()
    {
        $Datos["Automoviles"]=Automoviles::all();
        $Datos["Choferes"]=Automoviles::all();
        return view("maestros.automoviles.lista", ["Datos" => $Datos]);
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
        $v = \Validator::make($request->only("placa"), [
            'placa'    => 'required|unique:automoviles',
        ]);
       if ($v->fails()){
            return $v->errors();
       } else {
            Automoviles::insert($request->all());
            return "Exito";
       }
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
        $v = \Validator::make($request->only("placa"), [
            'placa'    => 'required|unique:automoviles,placa,'.$id,
        ]);
       if ($v->fails()){
            return $v->errors();
       } else {
            Automoviles::where("id", $id)->update($request->except("_method"));
            return "Exito";
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Automoviles::where("id", $id)->delete();
    }
}
