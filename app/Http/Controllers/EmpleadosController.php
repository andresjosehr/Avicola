<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;
use App\Cargos;
use App\Usuarios;
use App\Modulos;
use Hash;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos["Empleados"]=Empleados::with("Cargo")->get();
        $Datos["Cargos"]=Cargos::all();
        return view("maestros.empleados.empleados", ["Datos" => $Datos])->with('Modulos', Modulos::all());
    }

    public function listUpdate()
    {
        $Datos["Empleados"]=Empleados::with("Cargo")->get();
        $Datos["Cargos"]=Cargos::all();
        return view("maestros.empleados.lista", ["Datos" => $Datos]);
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



    public function crearCuenta(Request $request)
    {
        $Empleado = Empleados::where("id", $request->id_empleado)->first();

        Usuarios::insert([
            "nombre" => $Empleado->nombre." ".$Empleado->apellido_paterno." ".$Empleado->apellido_materno,
            "email" => $Empleado->email,
            "password" => Hash::make($request->password),
            "rol" => "2"
        ]);

        $Usuario = Usuarios::orderBy("id", "DESC")->first();

        Empleados::where("id", $request->id_empleado)->update(["id_usuario" => $Usuario->id]);
        return "Exito";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $v = \Validator::make($request->only("email"), [
            'email'    => 'required|unique:empleados',
        ]);
       if ($v->fails()){
            return $v->errors();
       } else {
            Empleados::insert($request->all());
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
        $v = \Validator::make($request->only("email"), [
            'email'    => 'required|unique:empleados,email,'.$id,
        ]);
       if ($v->fails()){
            return $v->errors();
       } else {
            Empleados::where("id", $id)->update($request->except("_method"));
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
        Empleados::where("id", $id)->delete();
    }
}
