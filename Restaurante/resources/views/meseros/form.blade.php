<div class="form-group {{ $errors->has('idUsuario') ? 'has-error' : ''}}">
    <label for="idUsuario" class="control-label">{{ 'Nombre' }}</label>
    {{-- <input class="form-control" name="idUsuario" type="number" id="idUsuario" value="{{ isset($mesero->idUsuario) ? $mesero->idUsuario : ''}}" > --}}
    <select class="form-control" name="idUsuario" id="idUsuario">
        @foreach ($usuarios as $usuario)
    <option value="{{$usuario->id}}"
        @if(isset($usuarios->idUsuario) && $usuarios->idUsuario == $usuario->id)
        selected
        @endif
        >
        {{$usuario->nombre}} {{$usuario->apellido}}
    </option>
        @endforeach
    </select>
    {{-- <pre>{{$usuarios}}</pre>  --}}
    {!! $errors->first('idUsuario', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
