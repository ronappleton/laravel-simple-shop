@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Add Product</h1>
@stop

@section('content')
    {!! Form::open(['route' => 'product.store']) !!}
    @include('simple-shop::products.form')
    {{ Form::close() }}
@endsection