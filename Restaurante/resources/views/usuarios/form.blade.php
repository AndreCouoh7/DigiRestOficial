<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($usuario->nombre) ? $usuario->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
    <label for="apellido" class="control-label">{{ 'Apellido' }}</label>
    <input class="form-control" name="apellido" type="text" id="apellido" value="{{ isset($usuario->apellido) ? $usuario->apellido : ''}}" >
    {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="direccion" type="text" id="direccion" value="{{ isset($usuario->direccion) ? $usuario->direccion : ''}}" >
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="telefono" type="text" id="telefono" value="{{ isset($usuario->telefono) ? $usuario->telefono : ''}}" >
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaNacimiento') ? 'has-error' : ''}}">
    <label for="fechaNacimiento" class="control-label">{{ 'Fechanacimiento' }}</label>
    <input class="form-control" name="fechaNacimiento" type="date" id="fechaNacimiento" value="{{ isset($usuario->fechaNacimiento) ? $usuario->fechaNacimiento : ''}}" >
    {!! $errors->first('fechaNacimiento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
    <label for="correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="correo" type="text" id="correo" value="{{ isset($usuario->correo) ? $usuario->correo : ''}}" >
    {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <select name="tipo" class="form-control" id="tipo" >
    @foreach (json_decode('{"opcion1":"Mesero","opcion2":"Cajero","opcion3":"Cliente"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($usuario->tipo) && $usuario->tipo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
