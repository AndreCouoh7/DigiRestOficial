<?php

use Illuminate\Database\Seeder;

class OrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('usuarios')->insert([
            'nombre'=>'Berlin',
            'apellido' =>'Programing',
            'direccion'=>'C-17',
            'telefono' => 9971386229,
            'fechaNacimiento' => 1987/01/01,
             'correo' => 'berlin@gmail.com', 
             'tipo'=> 'Mesero'
        ]) ;
        DB::table('usuarios')->insert([
            'nombre'=>'Marcos',
            'apellido' =>'Peréz',
            'direccion'=>'C-13' ,
            'telefono' => 9971386229,
            'fechaNacimiento' => 1987/01/01,
             'correo' => 'marcos@gmail.com', 
             'tipo'=> 'Cliente'
        ]) ;
        DB::table('usuarios')->insert([
            'nombre'=>'Cielo',
            'apellido' =>'Pacheco',
            'direccion'=>'C-32' ,
            'telefono' => 9971386229,
            'fechaNacimiento' => 1987/02/01,
             'correo' => 'cielo@gmail.com', 
             'tipo'=> 'Cajero'
        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'Joel',
            'apellido'=> 'Pech',
             'direccion'=>'C-17',
              'telefono' => 9971386229,
              'fechaNacimiento' => 1986/05/23,
              'correo' => 'joel@gmail.com',
              'tipo'=>'Cliente'
        ]);
        DB::table('categorias')->insert([
            'nombre'=> 'Bebidas'
        
        ]);
        DB::table('categorias')->insert([
            'nombre'=> 'Tortas'
        ]);

        DB::table('zonas')->insert([
            'nombre'=> 'Norte'
        ]) ;


        DB::table('productos')->insert([
            'nombre' => 'Coca-Cola',
            'descripcion' => 'Bebida-Energetica',
            'precio' => '12',
            'idCategoria' => '1'


        ]);

        DB::table('productos')->insert([
            'nombre' => 'Torta',
            'descripcion' => 'Jamon',
            'precio'  => '20',
            'idCategoria' => '2'
        ]);
        
        DB::table('mesas')->insert([
            'idZona' => 1,
            'numero' => 1
        ]);

        DB::table('ordenes')->insert([
            'numero' => '1',
            'idMesa' => '1'
        ]);
        

        DB::table('detalle_ordenes')->insert([
            'idOrden' => '1',
            'idProducto' => '1',
            'cantidad' => '4',
            'precio' => '15'
        ]);

       
        DB::table('meseros')->insert([
            'idUsuario' => 1
        ]) ;
        DB::table('asignaciones')->insert([
            'fechaAsignacion' => 2002/02/02,
             'idMesa' => 1,
              'idMesero'=>1
        ]) ;
        DB::table('tickets')->insert([
            'iva'=>'5%',
            'total'=>'90',
            'idOrden'=>1
        ]) ;
        DB::table('clientes')->insert([
            'idUsuario'=> 2
        ]) ;
        DB::table('cajeros')->insert([
            'idUsuario' => 3
        ]) ;
        DB::table('pagos')->insert([
            'cantidadPago'=> 89,
             'fechaPago'=> '1999/09/12',
              'idCajero'=> 1,
               'idCliente'=>1,
               'idTicket'=>1
        ]) ;
        DB::table('contactos')->insert([
            'idUsuario'=> 4
        ]) ;
        DB::table('telefonos')->insert([
            'numero'=> 9971386229,
            'idContacto'=>1
        ]) ;
        DB::table('direcciones')->insert([
            'idContacto'=>1,
            'cp'=>97800,
            'municipio'=>'Maxcanu',
            'estado'=>'Yucatan',
             'localidad'=>'Maxcanu',
              'calle'=> 17,
            'numeroInterior'=>32,
             'numeroExterior'=> 0,
              'cruzamiento'=> 32
        ]) ;


        
        
    }
}
