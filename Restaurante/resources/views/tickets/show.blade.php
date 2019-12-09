@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Ticket {{ $ticket->id }}</div>
                <div class="card-body">

                    <a href="{{ url('/tickets') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/tickets/' . $ticket->id . '/edit') }}" title="Edit Ticket"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                    <form method="POST" action="{{ url('tickets' . '/' . $ticket->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Ticket" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $ticket->id }}</td>
                                </tr>
                                <tr>
                                    <th> Iva </th>
                                    <td> {{ $ticket->iva }} </td>
                                </tr>
                                <tr>
                                    <th> Total </th>
                                    <td> {{ $ticket->total }} </td>
                                </tr>
                                <tr>
                                    <th> Numero Orden </th>
                                    <td> {{ $ticket->Orden->Numero }} </td>
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