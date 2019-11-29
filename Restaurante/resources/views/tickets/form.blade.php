<div class="form-group {{ $errors->has('iva') ? 'has-error' : ''}}">
    <label for="iva" class="control-label">{{ 'Iva' }}</label>
    <input class="form-control" name="iva" type="number" id="iva" value="{{ isset($ticket->iva) ? $ticket->iva : ''}}" >
    {!! $errors->first('iva', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'Total' }}</label>
    <input class="form-control" name="total" type="number" id="total" value="{{ isset($ticket->total) ? $ticket->total : ''}}" >
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idOrden') ? 'has-error' : ''}}">
    <label for="idOrden" class="control-label">{{ 'Idorden' }}</label>
    <input class="form-control" name="idOrden" type="number" id="idOrden" value="{{ isset($ticket->idOrden) ? $ticket->idOrden : ''}}" >
    {!! $errors->first('idOrden', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
