<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
	protected $guarded = [];
	
    protected $table = "proveedores";


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
}
