<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuiasPedido extends Model
{
    protected $table="guias_pedido";


    public function Cliente()
    {
    	return $this->hasOne(Clientes::class, "id", "id_cliente");
    }


    public function UnidadesProductos()
    {
    	return $this->hasMany(UnidadesProductos::class, "id_guia_pedido", "id");
    }
}
