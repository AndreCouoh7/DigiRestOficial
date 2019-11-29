<?php

namespace App\Contracts;

interface ICalculateTotal{
	
	///Operacion aritmetica de suma
	public function CalcularTotal($idOrden);
}