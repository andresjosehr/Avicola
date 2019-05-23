<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automoviles extends Model
{
    protected $table = "automoviles";


    public function Chofer()
    {
    	return $this->hasOne(Empleados::class, "id", "id_chofer");
    }
}
