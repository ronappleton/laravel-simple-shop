<div class="input-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <i class="material-icons">motorcycle</i>
    {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Name...']) }}
    @if ($errors->has('name'))
        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
    @endif
</div>
<div class="input-group {{ $errors->has('short_description') ? 'has-error' : '' }}">
    <i class="material-icons">motorcycle</i>
    {{ Form::text('short_description', old('short_description'), ['class' => 'form-control', 'placeholder' => 'Short Description...']) }}
    @if ($errors->has('short_description'))
        <span class="help-block">
                            <strong>{{ $errors->first('short_description') }}</strong>
                        </span>
    @endif
</div>
<div class="input-group {{ $errors->has('long_description') ? 'has-error' : '' }}">
    <i class="material-icons">motorcycle</i>
    {{ Form::textarea('long_description', old('long_description'), ['class' => 'form-control', 'placeholder' => 'Long Description...']) }}
    @if ($errors->has('long_description'))
        <span class="help-block">
                            <strong>{{ $errors->first('long_description') }}</strong>
                        </span>
    @endif
</div>
<div class="input-group {{ $errors->has('price') ? 'has-error' : '' }}">
    <i class="material-icons">motorcycle</i>
    {{ Form::number('price', old('price'), ['class' => 'form-control', 'placeholder' => 'Price...']) }}
    @if ($errors->has('price'))
        <span class="help-block">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
    @endif
</div>