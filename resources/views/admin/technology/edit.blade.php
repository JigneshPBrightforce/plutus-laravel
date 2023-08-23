@extends('layouts.admin')
@push('extra-css')
@endpush
@section('content')
<!-- Info boxes -->

<!-- Default box -->
<form id="general-info" name="frmUpdateProfile" method="POST" enctype="multipart/form-data"
    action="{{ route('admin.technology.update') }}">
    @csrf
    <input type="hidden" name="action" value="{{ $arrData->id }}">

    <div class="box">
        <div class="box-body">
            <div class="form-group row">
                <label for="name" class="col-md-2 required col-form-label text-md-right">Technology Name</label>
                <div class="col-md-4">
                    <input id="technology_name" type="text"
                        class="form-control @error('technology Name') is-invalid @enderror" name="tech_name"
                        value="{{ $arrData->tech_name }}" placeholder="" autocomplete="technology_name" autofocus>
                    @if($errors->has('tech_name'))
                    <div class="error">{{ $errors->first('tech_name') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Status</label>
                <div class="col-md-4">
                    <select class="form-control" id="is_active" name="is_active">
                        <option value="0" <?php echo ($arrData->is_active == 0) ? 'selected' : ''; ?>>active</option>
                        <option value="1" <?php echo ($arrData->is_active == 1) ? 'selected' : ''; ?>>in-active</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Logo</label>
                <div class="col-md-4">
                    <img src="{{ asset($arrData->logo) }}" width="100" />
                    <input type="file" accept="image/*" data-max-size="2M" data-min-width="1300" data-min-height="600"
                        name="logo" data-default-file="{{$arrData->logo ? asset($arrData->logo) : ''}}" id="logo" />
                    @if($errors->has('logo'))
                    <div class="error">{{ $errors->first('logo') }}</div>
                    @endif
                </div>
            </div>

        </div>

        <div class="box-footer">
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
                <a href="{{ route('admin.technology') }}" class="btn btn-danger m-1">Cancel</a>
            </div>
        </div>
        <!-- /.box-footer-->
    </div>
</form>
<!-- /.box -->
@endsection
@push('extra-js-scripts')
@endpush