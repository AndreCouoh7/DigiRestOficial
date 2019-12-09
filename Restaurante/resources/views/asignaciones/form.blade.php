
<div class="form-group {{ $errors->has('fechaAsignacion') ? 'has-error' : ''}}">
    <label for="fechaAsignacion" class="control-label">{{ 'Fecha Asignacion' }}</label>
    <input class="form-control" name="fechaAsignacion" type="date" id="fechaAsignacion" value="{{ isset($asignacione->fechaAsignacion) ? $asignacione->fechaAsignacion : ''}}" >
    {!! $errors->first('fechaAsignacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMesa') ? 'has-error' : ''}}">
    <label for="idMesa" class="control-label">{{ 'Mesa' }}</label>
    {{-- <input class="form-control" name="idMesa" type="number" id="idMesa" value="{{ isset($asignacione->idMesa) ? $asignacione->idMesa : ''}}" >
    {{-- {!! $errors->first('idMesa', '<p class="help-block">:message</p>') !!} --}} 
    {!! $errors->first('idMesa', '<p class="help-block">:message</p>') !!} 
    <select class="form-control" name="idMesa" id="idMesa">
        @foreach ($mesas as $mesa)
        <option value="{{$mesa->id}}"
            @if(isset($mesas->idMesa) && $mesas->idMesa==$mesa->id)
            selected
            @endif 
            >
        {{$mesa->numero}} | {{$mesa->zona->nombre}}
        </option>
        @endforeach
    </select>
     
</div>
<div class="form-group {{ $errors->has('idMesero') ? 'has-error' : ''}}">
    <label for="idMesero" class="control-label">{{ 'Mesero' }}</label>
    {{-- <input class="form-control" name="idMesero" type="number" id="idMesero" value="{{ isset($asignacione->idMesero) ? $asignacione->idMesero : ''}}" >
    {!! $errors->first('idMesero', '<p class="help-block">:message</p>') !!} --}}
    <select class="form-control" name="idMesero" id="idMesero">
        @foreach ($meseros as $mesero)
        <option value="{{$mesero->id}}"
            @if(isset($meseros->idMesero) && $meseros->idMesero==$mesero->id)
            selected
            @endif
            >
        {{$mesero->usuario->nombre}} {{$mesero->usuario->apellido}}
        </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
