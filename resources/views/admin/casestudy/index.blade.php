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

    <div class="d-md-flex align-items-center justify-content-between flex-wrap w-100 mb-0 mb-lg-4">
        <h4 class="page-title mb-3 mb-lg-0">CaseStudy</h4>
        <a class="btn btn-primary " href="{{ route('admin.casestudy.create') }}">Add New</a>
    </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($arrdata as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->title }} </td>
                    <td><a href="{{ route('admin.casestudy.edit', array('id' => $data->id))}}">Edit</a> | <a href="javascript:void(0)" onclick="deleteRecord(<?= $data->id ?>)">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
                // admin.casestudy.delete
                window.location.href = '{{URL("admin")}}{{"/casestudy"}}{{"/delete"}}/' + num;
            } else {
                swal("Cancelled", "Your Data is safe :)", "error");
            }
        });
    };
</script>
@endpush