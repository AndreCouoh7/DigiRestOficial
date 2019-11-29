<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\ICalculateTotal;
use App\Models\Cuenta;

class CalculateTotalService	extends Controller
	implements ICalculateTotal{
	public function CalcularTotal($idOrden)
	{	
	   $orden = Ordendetalle::firstOrFail($idOrden);
	   if ($orden==null) {
		throw new Exception("Error no existe la orden");
		}

		$total=0;
		  foreach ($orden->ordendetalle as $itemOrden) {
			  $cantidad=$itemOrden->cantidad;
			  $precio=$itemOrden->precio;

			  $total += $cantidad*$precio;
		  }
		  $x= new Cuenta;
		  $x ->total =$total;
		  $x->save();
		  return array('r'=>$total);
	   	
	}
}