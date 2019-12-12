<?php
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IRegistrarOrden;
use App\Orden;
use App\Mesa;

use App\DetalleOrden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrarOrdenService extends Controller 
implements IRegistrarOrden{
    public function registrar(Request $orden){
        $mesa = Mesa::where("id", $orden->idMesa)->first();
        if ($mesa == null) {
			throw new Exception("Error no hay mesas registradas");
		}
       
            $x = new Orden;
            $x->numero = 12;//Pendiente
            $x->idMesa = $mesa->id;
            $x->save();

           
            
            foreach ($orden->detalleordenes as $item ){
              $y=DetalleOrden::create([
                    'idOrden' => $x->id,
                    'idProducto'=>$item['idProducto'],
                    'cantidad'=>$item['cantidad'],
                    'precio'=>$item['precio']
                    ]);
                }
            
            $t = Orden::find( $x->id) ;
            return array('r' => $t);
        
        
    }
}


                                // $x = Orden::create([
                                // 'numero' => 0,
                                // 'mesa_id' => $mesa->id
                                // ]);