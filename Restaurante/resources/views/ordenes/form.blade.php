<div class="form-group {{ $errors->has('Numero') ? 'has-error' : ''}}">
    <label for="Numero" class="control-label">{{ 'Numero' }}</label>
    <input class="form-control" name="Numero" type="number" id="Numero" value="{{ isset($ordene->Numero) ? $ordene->Numero : ''}}" >
    {!! $errors->first('Numero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMesa') ? 'has-error' : ''}}">
    <label for="idMesa" class="control-label">{{ 'Idmesa' }}</label>
    <input class="form-control" name="idMesa" type="number" id="idMesa" value="{{ isset($ordene->idMesa) ? $ordene->idMesa : ''}}" >
    {!! $errors->first('idMesa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
