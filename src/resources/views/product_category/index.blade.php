@extends('adminlte::page')

@section('title', 'Product Categories')

@section('content_header')
    <h1>All Product Categories</h1>
@stop

@section('content')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header"><a href="{{ route('product_category.create') }}" class="btn btn-sm btn-success">Add New Product Category</a>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <table class="table table-bordered table-hover dataTable" id="product-categories">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts')
    <script>
        $(function () {
            $('#product-categories').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url('shop-resource/allCategories') }}',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endpush

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@stop

@section('js')
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
@stop