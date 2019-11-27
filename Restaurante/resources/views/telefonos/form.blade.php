<div class="form-group {{ $errors->has('idContacto') ? 'has-error' : ''}}">
    <label for="idContacto" class="control-label">{{ 'Idcontacto' }}</label>
    <input class="form-control" name="idContacto" type="number" id="idContacto" value="{{ isset($telefono->idContacto) ? $telefono->idContacto : ''}}" >
    {!! $errors->first('idContacto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero') ? 'has-error' : ''}}">
    <label for="numero" class="control-label">{{ 'Numero' }}</label>
    <input class="form-control" name="numero" type="number" id="numero" value="{{ isset($telefono->numero) ? $telefono->numero : ''}}" >
    {!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
