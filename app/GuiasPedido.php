<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuiasPedido extends Model
{
    protected $table = 'guias_pedido';

    public function Productos()
    {
    	return $this->hasMany(Productos::class, "id_guia_pedido", "id");
    }

    public function Cliente()
    {
    	return $this->hasOne(Clientes::class, "id", "id_cliente");
    }

}
