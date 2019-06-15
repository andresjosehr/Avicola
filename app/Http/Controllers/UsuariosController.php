<?php

namespace App\Http\Controllers;

use App\Usuarios;
use App\GruposUsuarios;
use App\Modulos;
use Illuminate\Http\Request;
use Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos["Usuarios"]=Usuarios::all();
        $Datos["GruposUsuarios"]=GruposUsuarios::all();
        return view("seguridad.usuarios.usuarios", ["Datos" => $Datos])->with('Modulos', Modulos::all());
    }

    public function listUpdate()
    {
        $Datos["Usuarios"]=Usuarios::all();
        $Datos["GruposUsuarios"]=GruposUsuarios::all();
        return view("seguridad.usuarios.lista", ["Datos" => $Datos])->with('Modulos', Modulos::all());
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
        $v = \Validator::make($request->only("email"), [
            'email'    => 'required|unique:usuarios',
        ]);
       if ($v->fails()){
            return $v->errors();
       } else {
            $request->merge(["password" => Hash::make($request->password)]);
            Usuarios::insert($request->except("password_2"));
            return "Exito";
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Usuarios::where("id", $id)->update($request->only("id_grupo"));
        return "Exito";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Usuarios::where("id", $id)->delete();
    }



}
