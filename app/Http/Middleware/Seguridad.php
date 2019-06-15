<?php

namespace App\Http\Middleware;

use Closure;
use App\ModulosGrupos;

class Seguridad
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $Check=false;
        if (session()->get("rol")=="2") {
            $Modulos = ModulosGrupos::where("id_grupo_usuario", session()->get("grupo"))->with("Modulos")->get();
            foreach ($Modulos as $Modulo) {
                if ($request->path()==$Modulo->Modulos["ruta"]) {
                    $Check=true;
                }
            }
        }


        if (!$Check && $request->path()!="/" && session()->get("rol")=="2") {
           return redirect("/");
        }

        return $next($request);
    }
}
