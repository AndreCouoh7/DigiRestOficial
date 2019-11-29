<div class="form-group {{ $errors->has('idOrden') ? 'has-error' : ''}}">
    <label for="idOrden" class="control-label">{{ 'Idorden' }}</label>
    <input class="form-control" name="idOrden" type="number" id="idOrden" value="{{ isset($detalleordene->idOrden) ? $detalleordene->idOrden : ''}}" >
    {!! $errors->first('idOrden', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idProducto') ? 'has-error' : ''}}">
    <label for="idProducto" class="control-label">{{ 'Idproducto' }}</label>
    <input class="form-control" name="idProducto" type="number" id="idProducto" value="{{ isset($detalleordene->idProducto) ? $detalleordene->idProducto : ''}}" >
    {!! $errors->first('idProducto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($detalleordene->cantidad) ? $detalleordene->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($detalleordene->precio) ? $detalleordene->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
