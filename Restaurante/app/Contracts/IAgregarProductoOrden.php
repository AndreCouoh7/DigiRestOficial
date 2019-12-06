<?php
//Agregar producto a la orden
namespace App\Contracts;

interface IAgregarProductoOrden{	
	public function Agregar($idOrden, $idProducto, $cantidad, $precio);
}
