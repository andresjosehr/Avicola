<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modulos;
use App\GruposUsuarios;
use App\ModulosGrupos;
use App\Usuarios;

class GruposUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos["GruposUsuarios"]=GruposUsuarios::with("Modulos")->with("Usuarios")->get();
        $Datos["Usuarios"]=Usuarios::all();
        return view("seguridad.gruposUsuarios.grupos-usuarios", ["Datos" => $Datos])->with("Modulos", Modulos::all());
    }

    public function listUpdate()
    {
        $Datos["GruposUsuarios"]=GruposUsuarios::with("Modulos")->with("Usuarios")->get();
        $Datos["Usuarios"]=Usuarios::all();
        return view("seguridad.gruposUsuarios.lista", ["Datos" => $Datos])->with("Modulos", Modulos::all());
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

        GruposUsuarios::insert($request->only("descripcion"));

        $Grupo=GruposUsuarios::orderBy("id", "DESC")->first();

        $Usuarios=explode(",", $request->usuarios);
         foreach ($Usuarios as $key => $value) {
             Usuarios::where("id", $value)->update(["id_grupo" => $Grupo->id]);
         }
         foreach (explode(",", $request->modulos) as $key => $value) {
             ModulosGrupos::insert(["id_modulo" => $value, "id_grupo_usuario" => $Grupo->id]);
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
        GruposUsuarios::where("id", $id)->update($request->only("descripcion"));

        Usuarios::where("id_grupo", $id)->update(["id_grupo" => "0"]);

        $Usuarios=explode(",", $request->usuarios);
         foreach ($Usuarios as $key => $value) {
             Usuarios::where("id", $value)->update(["id_grupo" => $id]);
         }
         ModulosGrupos::where("id_grupo_usuario", $id)->delete();
         foreach (explode(",", $request->modulos) as $key => $value) {
             ModulosGrupos::insert(["id_modulo" => $value, "id_grupo_usuario" => $id]);
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
        ModulosGrupos::where("id_grupo_usuario", $id)->delete();
        GruposUsuarios::where("id", $id)->delete();
        Usuarios::where("id_grupo", $id)->update(["id_grupo" => 0]);
    }
}
