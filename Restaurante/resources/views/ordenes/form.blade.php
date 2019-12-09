<div class="form-group {{ $errors->has('Numero') ? 'has-error' : ''}}">
    <label for="Numero" class="control-label">{{ 'Numero' }}</label>
    <input class="form-control" name="Numero" type="number" id="Numero" value="{{ isset($ordene->Numero) ? $ordene->Numero : ''}}" >
    {!! $errors->first('Numero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMesa') ? 'has-error' : ''}}">
    <label for="idMesa" class="control-label">{{ 'Numero de mesa' }}</label>

    <select class="form-control" name="idMesa" type="number" id="idMesa">
    @foreach($mesa as $m)
    <option value ="{{$m->id}}"

        @if(isset($categoria->idMesa) && $mesa->idMesa==$m->id)
         selected 
         @endif
        >
    {{$m->numero}}
    </option>
    @endforeach
    </select>

    {!! $errors->first('idMesa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
