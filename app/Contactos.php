<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
     protected $guarded = [];

    protected $table = "contactos";


    public function TipoPersona()
    {
    	return $this->hasOne(TipoPersona::class, "id", "tipo_persona");
    }

    public function TipoDocumento()
    {
    	return $this->hasOne(TipoDocumento::class, "id", "tipo_documento");
    }

    public function Ubigeo()
    {
        return $this->hasOne(Ubigeo::class, "id_ubigeo", "codigo_ubigeo");
    }


    public function Cliente()
    {
        return $this->hasOne(Clientes::class, "id", "id_cliente");
    }

    public function Proveedor()
    {
        return $this->hasOne(Proveedores::class, "id", "id_proveedor");
    }
}
