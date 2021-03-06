@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Usuario {{ $usuario->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/usuarios') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/usuarios/' . $usuario->id . '/edit') }}" title="Edit Usuario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('usuarios' . '/' . $usuario->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Usuario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $usuario->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $usuario->nombre }} </td></tr>
                                     <tr><th> Apellido </th><td> {{ $usuario->apellido }} </td></tr>
                                      <tr><th> Direccion  </th><td> {{ $usuario->direccion }} </td></tr>
                                       <tr><th> Telefono </th><td> {{ $usuario->telefono }} </td></tr>
                                        <tr><th> Fecha de Nacimiento </th><td> {{ $usuario->fechaNacimiento }} </td></tr>
                                         <tr><th> Correo </th><td> {{ $usuario->correo }} </td></tr>
                                         <tr><th> Tipo </th><td> {{ __($usuario->tipo) }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
