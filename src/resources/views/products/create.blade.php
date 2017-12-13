@extends(config('laravel-simple-shop-module.layout_file'))

@section('title', 'Products')

@section('content_header')
    <h1>Add Product</h1>
@stop

@section('content')
    {!! Form::open(['route' => 'product.store']) !!}
    @include('laravel-simple-shop-module::form')
    <div class="form-group">
        {{ Form::submit('Add Product', ['class' => 'btn btn-sm btn-success form-control']) }}
    </div>

    {{ Form::close() }}
@endsection