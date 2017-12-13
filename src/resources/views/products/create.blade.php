@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Add Product</h1>
@stop

@section('content')
    {!! Form::open(['route' => 'product.store']) !!}
    @include('simple-shop::form')
    <div class="form-group">
        {{ Form::submit('Add Product', ['class' => 'btn btn-sm btn-success form-control']) }}
    </div>

    {{ Form::close() }}
@endsection