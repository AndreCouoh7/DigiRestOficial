<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalcularCambioTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCalcularCambio()
    {
        
        $idTicket=1 ;
        $efectivo =200;
     $response=$this->json('POST','/api/V1/ICalcularCambio/Cambio/'.$idTicket.'/'.$efectivo);
     $response->assertStatus(200);
    }
}
