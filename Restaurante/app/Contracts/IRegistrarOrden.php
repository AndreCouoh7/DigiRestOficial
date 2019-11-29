<?php

namespace App\Contracts;

interface IRegistrarOrden{
    //La funcion consiste enviar la informacion de la orden a la base de datos
    public function registrar($orden);
	
	
}