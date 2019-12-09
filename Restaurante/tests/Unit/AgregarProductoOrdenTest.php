<?php

namespace Tests\Unit;
//"./vendor/bin/phpunit"(Prueba)
use Tests\TestCase;
use App\Orden;
use App\DetalleOrden;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AgregarProductoOrdenTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAgregarTest()
    {
       $numero=0;
       $orden=Orden::find(1);
       $sumar=0;
       foreach($orden->detalleordenes as $deo){
        $sumar +=$deo->cantidad;
       }
    		 		
    	$idOrden=1;
			$idProducto=1;
      $cantidad=$numero;
			$precio=15;
		
    $response=$this->json('POST','api/V1/IAgregarProductoOrden/agregar/'.$idOrden.'/'.$idProducto.'/'.$cantidad.'/'.$precio);

       $orden=Orden::find(1);
       $sumar2=0;
       foreach($orden->detalleordenes as $deo){
        $sumar2 +=$deo->cantidad;
       }

		

		  $response->assertStatus(200);//Si hay respuesta
        $this->assertEquals($sumar2, $sumar + $numero);

		//$this->assertDatabaseHas('detalleOrden', [
   // 'idProducto' => '1', 'cantidad'=>'1',
//]);
    }
}

 // $orden = array (
        //     'idOrden'=>1,
        //     'detalle'=> array([
        //         'idProducto'=>1,
        //         'precio'=>14.50,
        //         'cantidad'=>3

        //     ])
        // );