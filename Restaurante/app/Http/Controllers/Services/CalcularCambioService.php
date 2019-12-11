<?php

namespace App\Http\Controllers\Services;
use  App\Ticket;
use App\Http\Controllers\Controller;
use App\Contracts\ICalcularCambio;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalcularCambioService	extends Controller
implements ICalcularCambio 
{
	public function Cambio(  $idTicket ,$efectivo)
	{
	
	
	
		$ticket=Ticket::where('id',$idTicket)->first();
		if($ticket==null)
		throw new \ErrorException("No existe la ticket");
	 

		     $efectivo=0;
			$total=$ticket->total;
			$cambio = $total - $efectivo ;
			return array('r' => $cambio);
		}
		
	}
