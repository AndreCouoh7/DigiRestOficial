<?php
namespace Tests\Unit;
use Tests\TestCase; 
//use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
class AsignacionesTest extends TestCase
//"./vendor/bin/phpunit"
{
    /** 
     * Prueba de la funcion aignar.
     *
     * @return void
     */ 
    public function testasignar()
    {
        $idmesero=1;
       	$idmesa=1;
		$response=$this->json('POST','/api/V1/IAsignacion/asignar/'.$idmesero.'/'.$idmesa);
		$response->assertStatus(200);//Si hay respuesta
		//$response->assertJson(['r'=>$x]);//Validacion de respuesta del calculo
    }
}