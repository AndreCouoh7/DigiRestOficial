<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Contracts\ICalculateTotal;
use App\DetalleOrden;
use App\Orden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculateTotalService	extends Controller
implements ICalculateTotal
{
	public function CalcularTotal(Request $ordenx)
	{
		$orden = Orden::where("id", $ordenx->idOrden)->first();

		if ($orden == null) {
			throw new Exception("Error no existe la orden");
		}

		$total = 0;
		foreach ($orden->DetalleOrdenes as $itemOrden) {
			$cantidad = $itemOrden->cantidad;
			$precio = $itemOrden->precio;

			$total += $cantidad * $precio;
		}
		return array('r' => $total);
	}
}
