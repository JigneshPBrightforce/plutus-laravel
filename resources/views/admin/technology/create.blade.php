@extends('layouts.admin')
@push('extra-css')
@endpush
@section('content')
<!-- Info boxes -->

<!-- Default box -->

<form id="general-info" name="frmUpdateProfile" method="POST" enctype="multipart/form-data"
    action="{{ route('admin.technology.store') }}">
    @csrf

    <div class="box">
        <div class="box-body">
            <div class="form-group row">
                <label for="name" class="col-md-2  required col-form-label text-md-right">Technology Name</label>
                <div class="col-md-4">
                    <input id="name" type="text" class="form-control @error('Technology Name') is-invalid @enderror"
                        name="tech_name" value="{{ old('tech_name') }}" placeholder="" autocomplete="name" autofocus>
                    @if($errors->has('tech_name'))
                    <div class="error">{{ $errors->first('tech_name') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Status</label>
                <div class="col-md-4">
                    <select class="form-control" id="is_active" name="is_active">
                        <option value="0">active</option>
                        <option value="1">in-active</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 required col-form-label text-md-right">Logo</label>
                <div class="col-md-4">
                    <input type="file" accept="image/*" name="logo" id="logo" data-max-size="2M" class="dropify" />
                    @if($errors->has('logo'))
                    <div class="error">{{ $errors->first('logo') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="form-group">
                <input type="submit" class="btn btn-primary m-1" value="Save">
                <a href="{{ route('admin.technology') }}" class="btn btn-danger m-1">Cancel</a>
            </div>
        </div>
        <!-- /.box-footer-->
    </div>
</form>

<!-- /.box -->
@endsection
@push('extra-js-scripts')
<script src="{{asset('admin/js/dropify.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('admin/css/dropify.min.css')}}">
<script>
$('.dropify').dropify();
</script>
@endpush