@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Asignaciones {{ $asignacione->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/asignaciones') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/asignaciones/' . $asignacione->id . '/edit') }}" title="Edit Asignacione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('asignaciones' . '/' . $asignacione->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Asignacione" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $asignacione->id }}</td>
                                    </tr>
                                    <tr><th> FechaAsignacion </th><td> {{ $asignacione->fechaAsignacion }} </td></tr><tr><th> #Mesa </th><td> {{ $asignacione->mesa->numero }} </td></tr><tr><th> Zona </th><td> {{ $asignacione->mesa->zona->nombre}} </td></tr><tr><th> Mesero </th><td> {{ $asignacione->mesero->usuario->nombre}} {{$asignacione->mesero->usuario->apellido}} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
