<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadesProductos extends Model
{
    protected $table = "unidades_productos";



    public function Producto()
    {
    	return $this->hasOne(Productos::class, "id", "id_producto");
    }


	public function GuiaEntrada()
    {
    	return $this->hasOne(GuiasEntrada::class, "id", "id_guia_entrada");
    }


}
