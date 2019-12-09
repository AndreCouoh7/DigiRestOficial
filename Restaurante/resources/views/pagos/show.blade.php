@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Pago {{ $pago->id }}</div>
                <div class="card-body">

                    <a href="{{ url('/pagos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/pagos/' . $pago->id . '/edit') }}" title="Edit Pago"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                    <form method="POST" action="{{ url('pagos' . '/' . $pago->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Pago" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $pago->id }}</td>
                                </tr>
                                <tr>
                                    <th> CantidadPago </th>
                                    <td> {{ $pago->cantidadPago }} </td>
                                </tr>
                                <tr>
                                    <th> FechaPago </th>
                                    <td> {{ $pago->fechaPago }} </td>
                                </tr>
                                <tr>
                                    <th> Nombre de Cajero </th>
                                    <td> {{ $pago->cajero->usuario->nombre }} </td>
                                </tr>
                                <tr>
                                    <th> Nombre de Cliente </th>
                                    <td> {{ $pago->cliente->usuario->nombre }} </td>
                                </tr>
                                <tr>
                                    <th> Numero de Ticket </th>
                                    <td> {{ $pago->ticket->orden->Numero }} </td>
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