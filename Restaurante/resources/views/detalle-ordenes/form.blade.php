<div class="form-group {{ $errors->has('idOrden') ? 'has-error' : ''}}">
    <label for="idOrden" class="control-label">{{ 'Numero de orden' }}</label>

    <select class="form-control" name="idOrden" type="number" id="idOrden">
    @foreach($orden as $o)
    <option value ="{{$o->id}}"

        @if(isset($orden->idOrden) && $orden->idOrden==$o->id)
         selected 
         @endif
        >
    {{$o->Numero}}
    </option>
    @endforeach
    </select>

    {!! $errors->first('idOrden', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idProducto') ? 'has-error' : ''}}">
    <label for="idProducto" class="control-label">{{ 'Nombre de pruducto' }}</label>
    <select class="form-control" name="idProducto" type="number" id="idProducto">
    @foreach($producto as $p)
    <option value ="{{$p->id}}"

        @if(isset($producto->idProducto) && $producto->idProducto==$p->id)
         selected 
         @endif
        >
    {{$p->nombre}}
    </option>
    @endforeach
    </select>
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
