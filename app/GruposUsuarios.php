<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GruposUsuarios extends Model
{
    protected $table = "grupos_usuarios";

    public function Modulos()
    {
        return $this->belongsToMany(Modulos::class, "modulos_gruposusuarios", 'id_grupo_usuario', "id_modulo");
    }

    public function Usuarios()
    {
    	return $this->hasMany(Usuarios::class, "id_grupo", "id");
    }
}
