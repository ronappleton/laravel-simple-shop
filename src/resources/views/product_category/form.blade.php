<div class="input-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <i class="material-icons">motorcycle</i>
    {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Name...']) }}
    @if ($errors->has('name'))
        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
    @endif
</div>