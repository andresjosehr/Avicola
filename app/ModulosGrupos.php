<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModulosGrupos extends Model
{
    protected $table = "modulos_gruposusuarios";


    public function Modulos()
    {
    	return $this->hasOne(Modulos::class, "id", "id_modulo");
    }
}
