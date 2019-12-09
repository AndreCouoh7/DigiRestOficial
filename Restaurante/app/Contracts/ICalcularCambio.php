<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface ICalcularCambio
{
	public function Cambio(  $idTicket ,$efectivo);
}
