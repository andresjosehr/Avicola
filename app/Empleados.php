<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = "empleados";


    public function Cargo()
    {
    	return $this->hasOne(Cargos::class, "id", "cargo");
    }
}
