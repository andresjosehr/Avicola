<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table= "productos";


    public function TipoProducto()
    {
    	return $this->hasOne(TipoProductos::class, "id", "id_tipo_producto");
    }

    public function Proveedor()
    {
    	return $this->hasOne(Proveedores::class, "id", "id_proveedor");
    }


}
