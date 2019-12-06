<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IAgregarProductoOrden;
use App\Orden;
use App\DetalleOrden;
//agregar producto a la orden
class AgregarProductoOrdenService extends Controller 
implements IAgregarProductoOrden{
	public function Agregar($idOrden, $idProducto, $cantidad, $precio)
	{
	
	try{
		 $f=Orden::firstOrFail($orden->id);

			 	$p=detalleOrden::create([
			 		'idOrden'=>$idOrden,
			 		'idProducto'=>$idProducto,
			 		'Cantidad'=>$itemCantidad->cantidad,
			 		'Precio'=>$itemPrecio->precio
			 	]);

			$f=Orden::firstOrFail($orden->id);
			return array('r'=>$f);						
		
		}catch(\ErrorException $ex){
			return 'error' .$ex;
		}
				
	}
}