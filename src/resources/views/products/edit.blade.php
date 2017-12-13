@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Alter Product</h1>
@stop

@section('content')
    {{ Form::model($model, ['route' => ['product.update', $model], 'method' => 'PUT']) }}
    @include('simple-shop::products.form')
    {{ Form::close() }}
@endsection