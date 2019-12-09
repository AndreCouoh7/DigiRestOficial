@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Asignaciones</div>
                    <div class="card-body">
                        <a href="{{ url('/asignaciones/create') }}" class="btn btn-success btn-sm" title="Add New Asignacion">
                            <i class="fa fa-plus" aria-hidden="true"></i> Añadir Nuevo
                        </a>

                        <form method="GET" action="{{ url('/asignaciones') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>FechaAsignacion</th><th>#Mesa | Zona</th><th>Mesero</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($asignaciones as $item)
                                    <tr>
                                     <td>{{ $item->id }}</td>
                                    <td>{{ $item->fechaAsignacion }}</td><td>{{ $item->mesa->numero}} | {{$item->mesa->zona->nombre}}</td><td>{{ $item->mesero->usuario->nombre}} {{ $item->mesero->usuario->apellido}} </td>
                                        <td>
                                            <a href="{{ url('/asignaciones/' . $item->id) }}" title="View Asignacione"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/asignaciones/' . $item->id . '/edit') }}" title="Edit Asignacione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/asignaciones' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Asignacione" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $asignaciones->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
