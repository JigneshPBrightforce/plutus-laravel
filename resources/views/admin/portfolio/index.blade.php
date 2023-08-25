@extends('layouts.admin')
@push('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/css/dataTables.bootstrap.min.css') }}">
<link href="{{asset('admin/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
<!-- Info boxes -->

<!-- Default box -->
<div class="container box">
    <div class="box-header">
        <a class="btn btn-primary" href="{{ route('admin.portfolio.create') }}">Add New</a>
    </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Portfolio Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($arrdata as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->project_name }} </td>
                    <td><a href="{{ route('admin.portfolio.edit', array('id' => $data->id))}}">Edit</a> | <a
                            href="{{ route('admin.portfolio.delete', array('id' => $data->id))}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-footer-->
</div>
<!-- /.box -->
@endsection
@push('extra-js-scripts')
<!-- DataTables -->
<script src="{{asset('admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('admin/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{asset('admin/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('admin/sweetalerts/custom-sweetalert.js')}}"></script>
<!-- page script -->
<script>
$(document).ready(function() {
    var table = $('#example1').DataTable({});

});

function deleteRecord(num) {
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        padding: '2em'
    }).then(function(result) {
        if (result.value) {
            window.location.href = '{{URL("roles")}}{{"/delete"}}/' + num;
        } else {
            swal("Cancelled", "Your Data is safe :)", "error");
        }
    });
};
</script>
@endpush