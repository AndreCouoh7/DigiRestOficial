<?php
	
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IAsignacion;
use App\Asignacion;
use DateTime;
use App\Mesero; 
use App\Mesa;
///Esta funcion asignara el mesero a la mesa
	
class AsignacionService 	
	extends Controller
	implements IAsignacion{
	
public function asignar($idmesero,$idmesa)
	{	
		$fecha = new DateTime("now");
	
		$mesero=Mesero::where('id',$idmesero)->first();
		if($mesero==null)
		throw new \ErrorException("No existe el mesero");
	
		$mesa=Mesa::where('id',$idmesa)->first();
		if($mesa==null)
		throw new \ErrorException("No existe la mesa");
	 
		$x= new Asignacion;
		$x->idMesa=$mesa->id;
		$x->idMesero=$mesero->id;
		$x->fechaAsignacion=$fecha;
		$x->save();		
		return array('r'=>$x);
    }
}