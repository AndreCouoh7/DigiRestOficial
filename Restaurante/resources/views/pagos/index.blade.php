@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Pagos</div>
                <div class="card-body">
                    <a href="{{ url('/pagos/create') }}" class="btn btn-success btn-sm" title="Add New Pago">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    <form method="GET" action="{{ url('/pagos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>CantidadPago</th>
                                    <th>FechaPago</th>
                                    <th>Cajero</th>
                                    <th>Cliente</th>
                                    <th>#Ticket</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pagos as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->cantidadPago }}</td>
                                    <td>{{ $item->fechaPago }}</td>
                                    <td>{{ $item->cajero->usuario->nombre }} {{ $item->cajero->usuario->apellido }}</td>
                                    <td>{{ $item->cliente->usuario->nombre }} {{ $item->cliente->usuario->apellido }}</td>
                                    <td>{{ $item->ticket->orden->Numero }}</td>
                                    <td>
                                        <a href="{{ url('/pagos/' . $item->id) }}" title="View Pago"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/pagos/' . $item->id . '/edit') }}" title="Edit Pago"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/pagos' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Pago" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $pagos->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection