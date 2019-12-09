@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Cajeros</div>
                <div class="card-body">
                    <a href="{{ url('/cajeros/create') }}" class="btn btn-success btn-sm" title="Add New Cajero">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    <form method="GET" action="{{ url('/cajeros') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>TIpo</th>
                                    <td>Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cajeros as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->usuario->nombre }} {{$item->usuario->apellido}}</td>
                                    <td>{{ $item->usuario->telefono }}</td>
                                    <td>{{ __($item->usuario->tipo) }}</td>
                                    <td>
                                        <a href="{{ url('/cajeros/' . $item->id) }}" title="View Cajero"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/cajeros/' . $item->id . '/edit') }}" title="Edit Cajero"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/cajeros' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Cajero" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $cajeros->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection