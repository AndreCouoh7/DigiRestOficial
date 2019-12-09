<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    //    Route::resource('task', 'TasksController');
Route::post('/V1/IRegistrarOrden/orden', 'Services\RegistrarOrdenService@registrar');	
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes
});

Route::post('/V1/IAgregarProductoOrden/agregar/{idOrden}/{idProducto}/{cantidad}/{precio}','Services\AgregarProductoOrdenService@Agregar');
Route::post('/V1/ICalculateTotal/Total','Services\CalculateTotalService@CalcularTotal');
Route::post('/V1/IAsignacion/asignar/{idmesero}/{idmesa}', 'Services\AsignacionService@asignar');	
Route::post('V1/ICalcularCambio/Cambio/{idTicket}/{efectivo}', 'Services\CalcularCambioService@Cambio');