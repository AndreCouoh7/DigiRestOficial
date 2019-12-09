@extends('adminlte::layouts.app')

@section('main-content')
<div class="container">
    <div class="row">


        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Cliente {{ $cliente->id }}</div>
                <div class="card-body">

                    <a href="{{ url('/clientes') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/clientes/' . $cliente->id . '/edit') }}" title="Edit Cliente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                    <form method="POST" action="{{ url('clientes' . '/' . $cliente->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Cliente" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $cliente->id }}</td>
                                </tr>
                                <tr><th> Nombre </th><td> {{ $cliente->usuario->nombre }} </td></tr>
                                     <tr><th> Apellido </th><td> {{ $cliente->usuario->apellido }} </td></tr>
                                      <tr><th> Direccion  </th><td> {{ $cliente->usuario->direccion }} </td></tr>
                                       <tr><th> Telefono </th><td> {{ $cliente->usuario->telefono }} </td></tr>
                                        <tr><th> Fecha de Nacimiento </th><td> {{ $cliente->usuario->fechaNacimiento }} </td></tr>
                                         <tr><th> Correo </th><td> {{ $cliente->usuario->correo }} </td></tr>
                                         <tr><th> Tipo </th><td> {{ __($cliente->usuario->tipo) }} </td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection