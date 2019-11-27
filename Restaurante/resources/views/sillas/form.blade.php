<div class="form-group {{ $errors->has('numeroSilla') ? 'has-error' : ''}}">
    <label for="numeroSilla" class="control-label">{{ 'Numerosilla' }}</label>
    <input class="form-control" name="numeroSilla" type="number" id="numeroSilla" value="{{ isset($silla->numeroSilla) ? $silla->numeroSilla : ''}}" >
    {!! $errors->first('numeroSilla', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mesaCorresponde') ? 'has-error' : ''}}">
    <label for="mesaCorresponde" class="control-label">{{ 'Mesacorresponde' }}</label>
    <input class="form-control" name="mesaCorresponde" type="number" id="mesaCorresponde" value="{{ isset($silla->mesaCorresponde) ? $silla->mesaCorresponde : ''}}" >
    {!! $errors->first('mesaCorresponde', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMesa') ? 'has-error' : ''}}">
    <label for="idMesa" class="control-label">{{ 'Idmesa' }}</label>
    <input class="form-control" name="idMesa" type="number" id="idMesa" value="{{ isset($silla->idMesa) ? $silla->idMesa : ''}}" >
    {!! $errors->first('idMesa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
