<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProductos extends Model
{
    protected $table= "tipo_producto";


    public function Categoria()
    {
    	return $this->hasOne(Categorias::class, "id", "id_categoria");
    }
}
