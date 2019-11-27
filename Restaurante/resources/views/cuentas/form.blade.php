<div class="form-group {{ $errors->has('numeroOrden') ? 'has-error' : ''}}">
    <label for="numeroOrden" class="control-label">{{ 'Numeroorden' }}</label>
    <input class="form-control" name="numeroOrden" type="number" id="numeroOrden" value="{{ isset($cuenta->numeroOrden) ? $cuenta->numeroOrden : ''}}" >
    {!! $errors->first('numeroOrden', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
