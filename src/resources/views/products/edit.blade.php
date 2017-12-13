@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Alter Product</h1>
@stop

@section('content')
    {{ Form::model($model, ['route' => ['product.update', $model], 'method' => 'PUT']) }}
    @include('simple-shop::products.form')
    <div class="form-group">
        {{ Form::submit('Alter Product', ['class' => 'btn btn-sm btn-success form-control']) }}
    </div>
    {{ Form::close() }}
@endsection