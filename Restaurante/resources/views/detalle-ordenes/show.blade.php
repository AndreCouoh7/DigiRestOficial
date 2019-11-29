@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">DetalleOrdene {{ $detalleordene->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/detalle-ordenes') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/detalle-ordenes/' . $detalleordene->id . '/edit') }}" title="Edit DetalleOrdene"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('detalleordenes' . '/' . $detalleordene->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete DetalleOrdene" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $detalleordene->id }}</td>
                                    </tr>
                                    <tr><th> IdOrden </th><td> {{ $detalleordene->idOrden }} </td></tr><tr><th> IdProducto </th><td> {{ $detalleordene->idProducto }} </td></tr><tr><th> Cantidad </th><td> {{ $detalleordene->cantidad }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
