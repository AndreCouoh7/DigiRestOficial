<div class="form-group {{ $errors->has('cantidadPago') ? 'has-error' : ''}}">
    <label for="cantidadPago" class="control-label">{{ 'Cantidadpago' }}</label>
    <input class="form-control" name="cantidadPago" type="number" id="cantidadPago" value="{{ isset($pago->cantidadPago) ? $pago->cantidadPago : ''}}" >
    {!! $errors->first('cantidadPago', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaPago') ? 'has-error' : ''}}">
    <label for="fechaPago" class="control-label">{{ 'Fechapago' }}</label>
    <input class="form-control" name="fechaPago" type="date" id="fechaPago" value="{{ isset($pago->fechaPago) ? $pago->fechaPago : ''}}" >
    {!! $errors->first('fechaPago', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idCajero') ? 'has-error' : ''}}">
    <label for="idCajero" class="control-label">{{ 'Cajero' }}</label>

    <select class="form-control" name="idCajero" id="idCajero">
    @foreach($cajeros as $cajero)
    <option value="{{$cajero->id}}"
    @if(isset($cajeros->idCajero) && $cajeros->idCajero==$cajero->id)
    selected
    @endif
    >
    {{$cajero->usuario->nombre}}
    </option>
    @endforeach
    </select>
    
    {!! $errors->first('idCajero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idCliente') ? 'has-error' : ''}}">
    <label for="idCliente" class="control-label">{{ 'Cliente' }}</label>

    <select class="form-control" name="idCliente" id="idCliente">
    @foreach($clientes as $cliente)
    <option value="{{$cliente->id}}"
    @if(isset($clientes->idCliente) && $clientes->idCliente==$cliente->id)
    selected
    @endif
    >
    {{$cliente->usuario->nombre}}
    </option>
    @endforeach
    </select>
    
    {!! $errors->first('idCliente', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idTicket') ? 'has-error' : ''}}">
    <label for="idTicket" class="control-label">{{ 'Ticket' }}</label>
    
    <select class="form-control" name="idTicket" id="idTicket">
    @foreach($tickets as $ticket)
    <option value="{{$ticket->id}}"
    @if(isset($tickets->idTicket) && $tickets->idTicket==$ticket->id)
    selected
    @endif
    >
    {{$ticket->orden->Numero}}
    </option>
    @endforeach
    </select>

    {!! $errors->first('idTicket', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
