@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Cajero {{ $cajero->id }}</div>
                <div class="card-body">

                    <a href="{{ url('/cajeros') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/cajeros/' . $cajero->id . '/edit') }}" title="Edit Cajero"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                    <form method="POST" action="{{ url('cajeros' . '/' . $cajero->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Cajero" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $cajero->id }}</td>
                                </tr>
                                <tr>
                                    <th> Nombre de Cajero </th>
                                    <td> {{ $cajero->usuario->nombre }}</td>
                                    </tr>
                                    <tr>
                                    <th> Apellido de Cajero </th>
                                    <td> {{$cajero->usuario->apellido}}</td>
                                    </tr>
                                    <tr>
                                    <th> Direccion </th>
                                    <td> {{ $cajero->usuario->direccion }}</td>
                                    </tr>
                                    <tr>   
                                    <th>Telefono</th>
                                    <td>{{ $cajero->usuario->telefono }}</td>
                                </tr>
                                <tr>
                                    <th> Fecha de Nacimiento </th>
                                    <td> {{ $cajero->usuario->fechaNacimiento }}</td>
                                    </tr>
                                    <tr>
                                    <th> Correo </th>
                                    <td> {{ $cajero->usuario->correo }}</td>
                                    </tr>
                                <tr>
                                    <th>Tipo</th>
                                    <th>{{__($cajero->usuario->tipo)}}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection