<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $orden =  array(
            'mesaid' => 1,
            'detalle'=>array([
                'idProducto' =>1,
                'cantidad' => 2,
                'precio'    => 12.50,
            ],
            [
                'idProducto' =>2,
                'cantidad' => 1,
                'precio'    => 9.50,
            ])
        
        );
        $response=$this->json('POST',
		'/V1/IRegistrarOrden/orden',
		$orden
		);
        
$this->assertDatabaseHas('ordenes', [
    'idMesa' => '1',
]);
            
    
        
    }
}