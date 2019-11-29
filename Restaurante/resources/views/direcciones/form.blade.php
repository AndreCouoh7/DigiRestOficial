<div class="form-group {{ $errors->has('idContacto') ? 'has-error' : ''}}">
    <label for="idContacto" class="control-label">{{ 'Idcontacto' }}</label>
    <input class="form-control" name="idContacto" type="number" id="idContacto" value="{{ isset($direccione->idContacto) ? $direccione->idContacto : ''}}" >
    {!! $errors->first('idContacto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cp') ? 'has-error' : ''}}">
    <label for="cp" class="control-label">{{ 'Cp' }}</label>
    <input class="form-control" name="cp" type="number" id="cp" value="{{ isset($direccione->cp) ? $direccione->cp : ''}}" >
    {!! $errors->first('cp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('municipio') ? 'has-error' : ''}}">
    <label for="municipio" class="control-label">{{ 'Municipio' }}</label>
    <input class="form-control" name="municipio" type="text" id="municipio" value="{{ isset($direccione->municipio) ? $direccione->municipio : ''}}" >
    {!! $errors->first('municipio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="control-label">{{ 'Estado' }}</label>
    <input class="form-control" name="estado" type="text" id="estado" value="{{ isset($direccione->estado) ? $direccione->estado : ''}}" >
    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('localidad') ? 'has-error' : ''}}">
    <label for="localidad" class="control-label">{{ 'Localidad' }}</label>
    <input class="form-control" name="localidad" type="text" id="localidad" value="{{ isset($direccione->localidad) ? $direccione->localidad : ''}}" >
    {!! $errors->first('localidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('calle') ? 'has-error' : ''}}">
    <label for="calle" class="control-label">{{ 'Calle' }}</label>
    <input class="form-control" name="calle" type="text" id="calle" value="{{ isset($direccione->calle) ? $direccione->calle : ''}}" >
    {!! $errors->first('calle', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numeroInterior') ? 'has-error' : ''}}">
    <label for="numeroInterior" class="control-label">{{ 'Numerointerior' }}</label>
    <input class="form-control" name="numeroInterior" type="number" id="numeroInterior" value="{{ isset($direccione->numeroInterior) ? $direccione->numeroInterior : ''}}" >
    {!! $errors->first('numeroInterior', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numeroExterior') ? 'has-error' : ''}}">
    <label for="numeroExterior" class="control-label">{{ 'Numeroexterior' }}</label>
    <input class="form-control" name="numeroExterior" type="number" id="numeroExterior" value="{{ isset($direccione->numeroExterior) ? $direccione->numeroExterior : ''}}" >
    {!! $errors->first('numeroExterior', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cruzamiento') ? 'has-error' : ''}}">
    <label for="cruzamiento" class="control-label">{{ 'Cruzamiento' }}</label>
    <input class="form-control" name="cruzamiento" type="number" id="cruzamiento" value="{{ isset($direccione->cruzamiento) ? $direccione->cruzamiento : ''}}" >
    {!! $errors->first('cruzamiento', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
