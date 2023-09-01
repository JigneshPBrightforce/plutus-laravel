@extends('layouts.admin')
@push('extra-css')
@endpush
@section('content')
<!-- Info boxes -->

<!-- Default box -->
<div class="admin-wrapper py-4">
    <div class="container box">
        <h4 class="page-title mb-4">Add Portfolio</h4>
        <form id="general-info" class="white-section-box" name="frmUpdateProfile" method="POST" enctype="multipart/form-data"
            action="{{ route('admin.portfolio.store') }}">
            @csrf
            <div class="row">
                <div class="col-lg-4">
                    <label for="name" class="custom_label mb-1">Project Type</label>
                    <select class="form-control" id="project_type" name="project_type" required>
                        <option value="">Select</option>
                        <option value="0">Web</option>
                        <option value="1">Mobile</option>
                    </select>
                    @if($errors->has('project_type'))
                    <div class="error">{{ $errors->first('project_type') }}</div>
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-4">
                        <label for="name" class="custom_label mb-1">Portfolio Name</label>
                        <input id="name" type="text" class="form-control" name="project_name"
                            value="{{ old('project_name') }}" placeholder="" autocomplete="name" autofocus>
                        @if($errors->has('project_name'))
                        <div class="error">{{ $errors->first('project_name') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-4">
                        <label for="name" class="custom_label mb-1">Short description</label>
                        <input type="text" class="form-control" name="project_short_description"
                            value="{{ old('project_short_description') }}">
                        @if($errors->has('project_short_description'))
                        <div class="error">{{ $errors->first('project_short_description') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="name" class="custom_label mb-1">Long description</label>
                        <textarea name="project_long_description"
                            class="form-control ckeditor">{{ old('project_long_description') }}</textarea>
                        @if($errors->has('project_long_description'))
                        <div class="error">{{ $errors->first('project_long_description') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <hr class="divider my-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group mb-4">
                        <label for="name" class="custom_label mb-1">Logo</label>
                        <input type="file" name="project_logo" id="project_logo" data-max-size="2M"
                            class="dropify" />
                        @if($errors->has('project_logo'))
                        <div class="error">{{ $errors->first('project_logo') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-4">
                        <label for="name" class="custom_label mb-1">Banner</label>
                        <input type="file" name="project_banner" id="project_banner" data-max-size="2M"
                            class="dropify" />
                        @if($errors->has('project_banner'))
                        <div class="error">{{ $errors->first('project_banner') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-4">
                        <label for="name" class="custom_label mb-1">Image</label>
                        <input type="file" name="project_image" id="project_image" data-max-size="2M"
                            class="dropify" />
                        @if($errors->has('project_image'))
                        <div class="error">{{ $errors->first('project_image') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <hr class="divider my-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group mb-4">
                        <label for="name" class="custom_label mb-1">About title</label>
                        <input type="text" class="form-control" name="about_title"
                            value="{{ old('about_title') }}">
                        @if($errors->has('about_title'))
                        <div class="error">{{ $errors->first('about_title') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-4">
                        <label for="name" class="custom_label mb-1">Country name</label>
                        <input type="text" class="form-control" name="country_name"
                            value="{{ old('country_name') }}">
                        @if($errors->has('country_name'))
                        <div class="error">{{ $errors->first('country_name') }}</div>
                        @endif
                    </div>  
                </div>  
                <div class="col-lg-4">
                    <div class="form-group mb-4">
                        <label for="name" class="custom_label mb-1">Targeted audience</label>
                        <input type="text" class="form-control" name="targeted_audience"
                            value="{{ old('targeted_audience') }}">
                        @if($errors->has('targeted_audience'))
                        <div class="error">{{ $errors->first('targeted_audience') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-4">
                        <label for="name" class="custom_label mb-1">Industry</label>
                        <input type="text" class="form-control" name="industry"
                            value="{{ old('industry') }}">
                        @if($errors->has('industry'))
                        <div class="error">{{ $errors->first('industry') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mb-4">
                        <label for="name" class="custom_label mb-1">Techinology </label>
                        <select class="form-select" aria-label="select example" id="technology">
                            <option value="">Select</option>
                            @foreach ($technology as $tech)
                            <option value="{{$tech->tech_name}}">{{$tech->tech_name}}</option>
                            @endforeach
                        </select>
                        <input type="hidden" id="technologyList" name="technology" id="page"
                            value="" />
                        @if($errors->has(' technology'))
                        <div class="error">{{ $errors->first('	technology') }}</div>
                        @endif
                        <div class="col-md-12 mb-2 techList"></div>
                    </div>
                </div>
            </div> 
            <hr class="divider my-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <label for="name" class="custom_label mb-1">Carosoul banner</label>
                        <input type="file" name="screenshort_banner" id="screenshort_banner"
                            data-max-size="2M" class="dropify" />
                        @if($errors->has('screenshort_banner'))
                        <div class="error">{{ $errors->first('screenshort_banner') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.portfolio') }}" class="btn btn-danger m-1">Cancel</a>
                <input type="submit" class="btn btn-orange w-auto" value="Save">
            </div>  
        </form>
    </div>
</div>

<!-- /.box -->
@endsection
@push('extra-js-scripts')
<script src="{{asset('admin/js/dropify.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('admin/css/dropify.min.css')}}">
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('.dropify').dropify();
    $('.ckeditor').ckeditor();
});
var techarray = [];
$("#technology").on('change', function() {
    techarray.push($(this).val());
    techarray = techarray.filter((item,
        index) => techarray.indexOf(item) === index);
    setTechtohtml();
});

function setTechtohtml() {
    var html = '';
    $.each(techarray, function(key, val) {
        html += '<button type="button" class="btn-primary"> ' + val +
            '<span class="badge badge-light"  onclick="deleteItem(' + key + ');">X</span></button>';
    })
    $(".techList").html(html)
    $("#technologyList").val(techarray);
}

function deleteItem(item) {
    delete techarray[item];
    techarray = techarray.filter(function(el) {
        return el != null;
    });
    $("#technology").val('');
    setTechtohtml();
    // techarray = techarray.filter(e => e !== value);
}
</script>

@endpush