<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentasGuiaPedido extends Model
{
    protected $table="ventas_guias_pedido";


    public function ClienteN()
    {
    	return $this->hasOne(Clientes::class, "id", "cliente");
    }
}
