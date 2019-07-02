<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuiasSalida extends Model
{
    protected $table="guias_salida";


    public function Cliente()
    {
    	return $this->hasOne(Clientes::class, "id", "id_cliente");
    }


    public function UnidadesProductos()
    {
        return $this->hasMany(UnidadesProductos::class, "id_guia_salida", "id");
    }

    public function GuiaPedido()
    {
        return $this->hasMany(GuiasPedido::class, "id_guia_salida", "id");
    }


    public function Acompanante1()
    {
    	return $this->hasMany(UnidadesProductos::class, "id", "acomanante_1");
    }
    public function Acompanante2()
    {
    	return $this->hasMany(UnidadesProductos::class, "id", "acomanante_2");
    }
    public function Acompanante3()
    {
    	return $this->hasMany(UnidadesProductos::class, "id", "acomanante_3");
    }
    public function Acompanante4()
    {
    	return $this->hasMany(UnidadesProductos::class, "id", "acomanante_4");
    }
}
