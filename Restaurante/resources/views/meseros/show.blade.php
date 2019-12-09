@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Mesero {{ $mesero->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/meseros') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/meseros/' . $mesero->id . '/edit') }}" title="Edit Mesero"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('meseros' . '/' . $mesero->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Mesero" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $mesero->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $mesero->usuario->nombre }} </td></tr>
                                     <tr><th> Apellido </th><td> {{ $mesero->usuario->apellido }} </td></tr>
                                      <tr><th> Direccion  </th><td> {{ $mesero->usuario->direccion }} </td></tr>
                                       <tr><th> Telefono </th><td> {{ $mesero->usuario->telefono }} </td></tr>
                                        <tr><th> Fecha de Nacimiento </th><td> {{ $mesero->usuario->fechaNacimiento }} </td></tr>
                                         <tr><th> Correo </th><td> {{ $mesero->usuario->correo }} </td></tr>
                                         <tr><th> Tipo </th><td> {{ __($mesero->usuario->tipo) }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
