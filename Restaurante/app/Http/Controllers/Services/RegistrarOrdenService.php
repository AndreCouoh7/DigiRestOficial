<?php
namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IRegistrarOrden;
use App\Models\Orden;
use Illuminate\Http\Request;

class RegistrarOrdenService extends Controller 
implements IRegistrarOrden{
    public function registrar(Request $orden){
        $mesa = Mesa::firstOrFail($orden->mesaid);
        if ( $mesa == null )
        {
            throw new \ErrorException('No hay mesas registradas.');
        }else
        {
            $x = new Orden;
            $x->numero = 0;//Pendiente
            $x->idMesa = $mesa->id;
            $x->save();

            foreach($orden->detalle as $itemOrden)
            {
                $y = DetalleOrden::create([
                'idOrden' => $x->id,
                'idProducto' =>$itemOrden->idproducto,
                'Cantidad' => $itemOrden->cantidad,
                'Precio'    => $itemOrden->precio,
                ]);
            }

            $t = Orden::firstOrFail( $x->id) ;
            return array('r' => $t);
        }
        
    }
}


                                // $x = Orden::create([
                                // 'numero' => 0,
                                // 'mesa_id' => $mesa->id
                                // ]);