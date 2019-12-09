<div class="form-group {{ $errors->has('idUsuario') ? 'has-error' : ''}}">
    <label for="idUsuario" class="control-label">{{ 'Nombre de cajero' }}</label>
    
    <select class="form-control" name="idUsuario" id="idUsuario">
    @foreach($usuario as $u)
    <option value="{{$u->id}}"
    @if(isset($usuario->idUsuario) && $u->idUsuario==$u->id)
    selected
    @endif
    >
    {{$u->nombre}}
    </option>
    @endforeach
    </select>

    {!! $errors->first('idUsuario', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
