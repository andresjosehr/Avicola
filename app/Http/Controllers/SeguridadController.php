<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use Hash;
use View;
use Illuminate\Support\Str;

class SeguridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function login(Request $request)
    {
        $v = \Validator::make($request->all(), [
                'email'    => 'required|email',
                'password' => 'required',
          ]); 

         if ($v->fails()){
              return "Error";
              die();
         } 


        $Usuario = Usuarios::where('email', $request->email)->first();

        if ($Usuario && Hash::check($request->password, $Usuario->password)) { 

            session()->put('sesion', 'true');
            session()->put('id', $Usuario->id);
            session()->put('nombre', $Usuario->nombre);
            session()->put('email', $Usuario->email);
      session()->put('rol', $Usuario->rol);
            
            return "Exito";
        }  

        else { return "Invalido"; }
    }


    public function resetPass(Request $request)
    {

        if (Usuarios::where("email", $request->email)->first()) {
            $Codigo=Str::random(32);
            Usuarios::where("email", $request->email)->update(["codigo_password" => $Codigo]);
            self::resetPassMail($request->email, $Codigo);
            return "Exito";
        } else{
            return "Error";
        }

        
    }

    public function resetPass2($codigo)
    {
        $Usuario = Usuarios::where("codigo_password", $codigo)->first();

        if ($Usuario) {
            return view("seguridad.resetPass2");
        }else{
            return redirect("/");
        }
    }

    public function resetPass3(Request $request, $codigo)
    {
        $request->merge(["codigo_password" => NULL, "password" => Hash::make($request->password)]);
        Usuarios::where("codigo_password", $codigo)->update($request->except("password_2"));
        return "Exito";
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
        //
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

    public function resetPassMail($destinatario, $codigo){

        $header = "From: Granja Avicola Sebastian <no-responder@granseb.com> \r\n";
        $header .= "Bcc: granseb@gmail.com \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/html";

        $body=(string)View::make('email.resetPass', ["codigo" => $codigo]);
        mail($destinatario, "Granja Avicola Sebastian | Cambio de contraseña", $body, $header);
    }


}
