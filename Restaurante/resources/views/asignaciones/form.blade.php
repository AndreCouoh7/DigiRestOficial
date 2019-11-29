<div class="form-group {{ $errors->has('fechaAsignacion') ? 'has-error' : ''}}">
    <label for="fechaAsignacion" class="control-label">{{ 'Fechaasignacion' }}</label>
    <input class="form-control" name="fechaAsignacion" type="date" id="fechaAsignacion" value="{{ isset($asignacione->fechaAsignacion) ? $asignacione->fechaAsignacion : ''}}" >
    {!! $errors->first('fechaAsignacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMesa') ? 'has-error' : ''}}">
    <label for="idMesa" class="control-label">{{ 'Idmesa' }}</label>
    <input class="form-control" name="idMesa" type="number" id="idMesa" value="{{ isset($asignacione->idMesa) ? $asignacione->idMesa : ''}}" >
    {!! $errors->first('idMesa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMesero') ? 'has-error' : ''}}">
    <label for="idMesero" class="control-label">{{ 'Idmesero' }}</label>
    <input class="form-control" name="idMesero" type="number" id="idMesero" value="{{ isset($asignacione->idMesero) ? $asignacione->idMesero : ''}}" >
    {!! $errors->first('idMesero', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
