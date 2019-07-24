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

    public function GuiaSalida()
    {
    	return $this->hasOne(GuiasSalida::class, "id", "id_guia_salida");
    }

    public function Ventas()
    {
    	return $this->hasMany(VentasGuiaPedido::class, "id_guia_pedido", "id");
    }


    public function UnidadesProductos()
    {
    	return $this->hasMany(UnidadesProductos::class, "id_guia_pedido", "id");
    }

}
