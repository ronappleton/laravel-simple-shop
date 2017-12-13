@extends('adminlte::page')

@section('title', 'Product Categories')

@section('content_header')
    <h1>Add Product Category</h1>
@stop

@section('content')
    {!! Form::open(['route' => 'product_category.store']) !!}
    @include('simple-shop::product_category.form')
    {{ Form::close() }}
@endsection