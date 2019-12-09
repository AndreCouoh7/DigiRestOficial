<div class="form-group {{ $errors->has('idZona') ? 'has-error' : ''}}">
    <label for="idZona" class="control-label">{{ 'Zona' }}</label>
    {{-- <input class="form-control" name="idZona" type="number" id="idZona" value="{{ isset($mesa->idZona) ? $mesa->idZona : ''}}" > --}}
        
    <select class="form-control" name="idZona" id="idZona">
        @foreach ($zonas as $zona)
    <option value="{{$zona->id}}"
        @if(isset($zonas->idZona) && $zonas->idZona == $zona->id)
        selected
        @endif
        >
        {{$zona->nombre}}
    </option>
        @endforeach
    </select>
    {!! $errors->first('idZona', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero') ? 'has-error' : ''}}">
    <label for="numero" class="control-label">{{ 'Numero de Mesa' }}</label>
    <input class="form-control" name="numero" type="text" id="numero" value="{{ isset($mesa->numero) ? $mesa->numero : ''}}" >
    {!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
