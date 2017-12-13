<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">{{ empty($model) ? 'New Category' : 'Alter Category' }}</h3>
    </div>
    <div class="box-body">
        <div class="input-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <i class="material-icons">motorcycle</i>
            {{ Form::text('name', empty($model) ? old('name') : $model->name, ['class' => 'form-control', 'placeholder' => 'Name...']) }}
            @if ($errors->has('name'))
                <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
            @endif
        </div>
        <div class="input-group {{ $errors->has('short_description') ? 'has-error' : '' }}">
            <i class="material-icons">motorcycle</i>
            {{ Form::text('short_description', empty($model) ? old('short_description') : $model->short_description, ['class' => 'form-control', 'placeholder' => 'Short Description...']) }}
            @if ($errors->has('short_description'))
                <span class="help-block">
                            <strong>{{ $errors->first('short_description') }}</strong>
                        </span>
            @endif
        </div>
        <div class="input-group {{ $errors->has('long_description') ? 'has-error' : '' }}">
            <i class="material-icons">motorcycle</i>
            {{ Form::textarea('long_description', empty($model) ? old('long_description') : 'long_description', ['class' => 'form-control', 'placeholder' => 'Long Description...']) }}
            @if ($errors->has('long_description'))
                <span class="help-block">
                            <strong>{{ $errors->first('long_description') }}</strong>
                        </span>
            @endif
        </div>
        <div class="input-group {{ $errors->has('price') ? 'has-error' : '' }}">
            <i class="material-icons">motorcycle</i>
            {{ Form::number('price', empty($model) ? old('price') : $model->price, ['class' => 'form-control', 'placeholder' => 'Price...']) }}
            @if ($errors->has('price'))
                <span class="help-block">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
            @endif
        </div>
    </div>
    <!-- /input-group -->
    <br>
    <br>
    <div class="form-group">
        {{ Form::submit(empty($model) ? 'Add Product' : 'Update Product', ['class' => 'btn btn-sm btn-success form-control']) }}
    </div>
</div>
<!-- /.box-body -->
</div>