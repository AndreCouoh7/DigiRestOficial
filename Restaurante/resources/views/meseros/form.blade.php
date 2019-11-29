<div class="form-group {{ $errors->has('idUsuario') ? 'has-error' : ''}}">
    <label for="idUsuario" class="control-label">{{ 'Idusuario' }}</label>
    <input class="form-control" name="idUsuario" type="number" id="idUsuario" value="{{ isset($mesero->idUsuario) ? $mesero->idUsuario : ''}}" >
    {!! $errors->first('idUsuario', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
