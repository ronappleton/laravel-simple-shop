@extends('adminlte::page)

@section('title', 'Product Categories')

@section('content_header')
    <h1>All Product Categories</h1>
@stop

@section('content')
    <p>
        <a href="{{ route('product_category.create') }}" class="btn btn-sm btn-success">Add New Product Category</a>
    </p>
    <div class="form-group">
        <table class="table table-bordered" id="users">
            <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>
    </div>

@stop

@push('scripts')
    <script>
        $(function () {
            $('#users').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url('admin/ajax-resources/allUsers') }}',
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