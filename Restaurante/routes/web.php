<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


Route::resource('usuarios', 'UsuariosController');
Route::resource('contactos', 'ContactosController');
Route::resource('direcciones', 'DireccionesController');
Route::resource('telefonos', 'TelefonosController');
Route::resource('clientes', 'ClientesController');
Route::resource('meseros', 'MeserosController');
Route::resource('cajeros', 'CajerosController');
Route::resource('zonas', 'ZonasController');
Route::resource('mesas', 'MesasController');
Route::resource('asignaciones', 'AsignacionesController');
Route::resource('categorias', 'CategoriasController');
Route::resource('productos', 'ProductosController');
Route::resource('ordenes', 'OrdenesController');
Route::resource('detalle-ordenes', 'DetalleOrdenesController');
Route::resource('tickets', 'TicketsController');
Route::resource('pagos', 'PagosController');