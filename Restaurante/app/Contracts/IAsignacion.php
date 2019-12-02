<?php

namespace App\Contracts;

interface IAsignacion{
	 
	//Asignar mesero a la mesa 
	public function asignar($idmesero,$idmesa);
}

