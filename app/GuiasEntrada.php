<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuiasEntrada extends Model
{
    protected $table="guias_entrada";

    public function UnidadesProductos()
    {
    	return $this->hasMany(UnidadesProductos::class, "id_guia_entrada", "id");
    }

    public function Proveedor()
    {
    	return $this->hasOne(Proveedores::class, "id", "id_proveedor");
    }

}
