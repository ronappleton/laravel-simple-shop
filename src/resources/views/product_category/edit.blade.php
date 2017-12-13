@extends('adminlte::page')

@section('title', 'Product Categories')

@section('content_header')
    <h1>Alter Product Category</h1>
@stop

@section('content')
    {{ Form::model($model, ['route' => ['product_category.update', $model], 'method' => 'PUT']) }}
    @include('simple-shop::product_category.form')
    {{ Form::close() }}
@endsection