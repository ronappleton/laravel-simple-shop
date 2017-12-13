@extends(config('laravel-simple-shop-module.layout_file'))

@section('title', 'Product Categories')

@section('content_header')
    <h1>Alter Product Category</h1>
@stop

@section('content')
    {{ Form::model($model, ['route' => ['product_category.update', $model], 'method' => 'PUT']) }}
    @include('laravel-simple-shop-module::product_category.form')
    <div class="form-group">
        {{ Form::submit('Alter Product Category', ['class' => 'btn btn-sm btn-success form-control']) }}
    </div>
    {{ Form::close() }}
@endsection