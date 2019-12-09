@extends('adminlte::layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Direccione {{ $direccione->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/direcciones') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/direcciones/' . $direccione->id . '/edit') }}" title="Edit Direccione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('direcciones' . '/' . $direccione->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Direccione" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $direccione->id }}</td>
                                    </tr>
                                    <tr><th> IdContacto </th><td> {{ $direccione->idContacto }} </td></tr><tr><th> Cp </th><td> {{ $direccione->cp }} </td></tr><tr><th> Municipio </th><td> {{ $direccione->municipio }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
