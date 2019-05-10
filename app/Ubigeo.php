<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    public $table = "ubigeo";

    public function Provincias()
    {
    	return $this->hasMany(Ubigeo::class, "departamento", "departamento")->select("departamento", "provincia")->distinct("provincia");
    }

    public function Distritos()
    {
    	return $this->hasMany(Ubigeo::class, "provincia", "provincia")->select("provincia", "distrito")->distinct("distrito");
    }

}
