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
    <label for="idCajero" class="control-label">{{ 'Idcajero' }}</label>
    <input class="form-control" name="idCajero" type="number" id="idCajero" value="{{ isset($pago->idCajero) ? $pago->idCajero : ''}}" >
    {!! $errors->first('idCajero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idCliente') ? 'has-error' : ''}}">
    <label for="idCliente" class="control-label">{{ 'Idcliente' }}</label>
    <input class="form-control" name="idCliente" type="number" id="idCliente" value="{{ isset($pago->idCliente) ? $pago->idCliente : ''}}" >
    {!! $errors->first('idCliente', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idTicket') ? 'has-error' : ''}}">
    <label for="idTicket" class="control-label">{{ 'Idticket' }}</label>
    <input class="form-control" name="idTicket" type="number" id="idTicket" value="{{ isset($pago->idTicket) ? $pago->idTicket : ''}}" >
    {!! $errors->first('idTicket', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>