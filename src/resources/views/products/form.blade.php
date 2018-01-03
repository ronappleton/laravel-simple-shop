<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">{{ empty($model) ? 'New Product' : 'Alter Product' }}</h3>
    </div>
    <div class="box-body">
        <div class="row>">
            <div class="col-xs-6">
                <div class="input-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <span class="input-group-addon"><i class="fa fa-motorcycle" aria-hidden="true"></i></span>
                    {{ Form::select('product_category_id', $selectItems, ['class' => 'form-control', 'placeholder' => 'Select Category']) }}
                    @if ($errors->has('product_category_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('product_category_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-xs-6">
                <div class="input-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <span class="input-group-addon"><i class="fa fa-motorcycle" aria-hidden="true"></i></span>
                    {{ Form::text('name', empty($model) ? old('name') : $model->name, ['class' => 'form-control', 'placeholder' => 'Name...']) }}
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="input-group {{ $errors->has('short_description') ? 'has-error' : '' }}">
                    <span class="input-group-addon"><i class="fa fa-motorcycle" aria-hidden="true"></i></span>
                    {{ Form::text('short_description', empty($model) ? old('short_description') : $model->short_description, ['class' => 'form-control', 'placeholder' => 'Short Description...']) }}
                    @if ($errors->has('short_description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('short_description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="input-group {{ $errors->has('long_description') ? 'has-error' : '' }}">
                    {{ Form::textarea('long_description', empty($model) ? old('long_description') : 'long_description', ['class' => 'form-control', 'placeholder' => 'Long Description...']) }}
                    @if ($errors->has('long_description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('long_description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="input-group {{ $errors->has('price') ? 'has-error' : '' }}">
                    <span class="input-group-addon"><i class="fa fa-motorcycle" aria-hidden="true"></i></span>
                    {{ Form::number('price', empty($model) ? old('price') : $model->price, ['class' => 'form-control', 'placeholder' => 'Price...']) }}
                    @if ($errors->has('price'))
                        <span class="help-block">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /input-group -->
    <br>
    <br>
    <div class="form-group">
        {{ Form::submit(empty($model) ? 'Add Product' : 'Update Product', ['class' => 'btn btn-sm btn-success form-control']) }}
    </div>
</div>






