<?php

namespace App\Contracts;
use Illuminate\Http\Request;
interface IRegistrarOrden{
    //La funcion consiste enviar la informacion de la orden a la base de datos
    public function registrar(Request $orden);
	
	
}