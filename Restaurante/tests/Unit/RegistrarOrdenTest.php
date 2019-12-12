<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
class RegistrarOrdenTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testregistrarTest()
    {
        $orden =  array(
            'idMesa' => 1,
            'detalleordenes'=>array('a'=>[
                'idProducto' =>1,
                'cantidad' => 2,
                'precio'    => 12.50,
            ],
            'b'=>[
                'idProducto' =>2,
                'cantidad' => 1,
                'precio'    => 9.50,
            ])
        
        );
        
        $response = $this->json('POST','api/V1/IRegistrarOrden/orden',$orden );
        //Esperando Respuesta del servidor
        $response->assertStatus(200);
        //Validando que exista en ka base de datos

$this->assertDatabaseHas('ordenes', [
    'idMesa' => '1',
]);
            
    
        
    }
}
