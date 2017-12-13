@extends(config('laravel-simple-shop-module.layout_file'))

@section('title', 'Product Categories')

@section('content_header')
    <h1>Add Product Category</h1>
@stop

@section('content')
    {!! Form::open(['route' => 'product_category.store']) !!}
    @include('laravel-simple-shop-module::product_category.form')
    <div class="form-group">
        {{ Form::submit('Add Product Category', ['class' => 'btn btn-sm btn-success form-control']) }}
    </div>

    {{ Form::close() }}
@endsection