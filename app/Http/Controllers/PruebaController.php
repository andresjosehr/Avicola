<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PruebaController extends Controller
{
    public function index($value='')
    {
    	DB::select("UPDATE sys_seb_ubigeo SET id_ubigeo = Concat('0', id_ubigeo)");


    	return "Exito";
    }
}
