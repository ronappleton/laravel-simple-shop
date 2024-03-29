<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">{{ empty($model) ? 'New Category' : 'Alter Category' }}</h3>
    </div>
    <div class="box-body">
        <div class="input-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <span class="input-group-addon"><i class="fa fa-motorcycle" aria-hidden="true"></i></span>
            {{ Form::text('name', empty($model) ? old('name') : $model->name, ['class' => 'form-control', 'placeholder' => 'Name...']) }}
            @if ($errors->has('name'))
                <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
            @endif
        </div>
        <!-- /input-group -->
        <br>
        <br>
        <div class="form-group">
            {{ Form::submit(empty($model) ? 'Add Product Category' : 'Alter Product Category', ['class' => 'btn btn-sm btn-success form-control']) }}
        </div>
    </div>
    <!-- /.box-body -->
</div>