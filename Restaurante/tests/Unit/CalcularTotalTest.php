<?php

namespace Tests\Unit;

use Tests\TestCase;
//use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalcularTotalTest extends TestCase
{

    public function testCalcularTotalTest()
    {

        $orden =  array(
            'idOrden' => 1,
        );
        $response = $this->json('POST', '/api/V1/ICalculateTotal/Total', $orden);
        $response->assertStatus(200);
        $response->assertSee('60');
    }
}
