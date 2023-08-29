@extends('layouts.admin')
@push('extra-css')
@endpush
@section('content')
<!-- Info boxes -->

<!-- Default box -->

<form id="general-info" name="frmUpdateProfile" method="POST" enctype="multipart/form-data" action="{{ route('admin.casestudy.store') }}">
    @csrf
    <div class="box">
        <div class="box-body">

            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">Title</label>
                <div class="col-md-4">
                    <input id="name" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="" autocomplete="name" autofocus>
                    @if($errors->has('title'))
                    <div class="error">{{ $errors->first('title') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">Short description</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="case_study_short_description" value="{{ old('case_study_short_description') }}">
                    @if($errors->has('case_study_short_description'))
                    <div class="error">{{ $errors->first('case_study_short_description') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">Long description</label>
                <div class="col-md-4">
                    <textarea name="case_study_long_description" class="form-control ckeditor">{{ old('case_study_long_description') }}</textarea>
                    @if($errors->has('case_study_long_description'))
                    <div class="error">{{ $errors->first('case_study_long_description') }}</div>
                    @endif
                </div>
            </div>
            <hr>

            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Banner</label>
                <div class="col-md-4">
                    <input type="file" name="case_study_banner" id="case_study_banner" data-max-size="2M" class="dropify" />
                    @if($errors->has('case_study_banner'))
                    <div class="error">{{ $errors->first('case_study_banner') }}</div>
                    @endif
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">About title</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="about_title" value="{{ old('about_title') }}">
                    @if($errors->has('about_title'))
                    <div class="error">{{ $errors->first('about_title') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">About description</label>
                <div class="col-md-4">
                    <textarea name="about_description" class="form-control ckeditor">{{ old('about_description') }}</textarea>
                    @if($errors->has('about_description'))
                    <div class="error">{{ $errors->first('about_description') }}</div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Techinology </label>
                <div class="col-md-4">
                    <select class="form-select" aria-label="select example" id="technology">
                        <option value="">Select</option>
                        @foreach ($technology as $tech)
                        <option value="{{$tech->tech_name}}">{{$tech->tech_name}}</option>
                        @endforeach
                    </select>
                    <input type="hidden" id="technologyList" name="technology" id="page" value="" />
                    @if($errors->has(' technology'))
                    <div class="error">{{ $errors->first('	technology') }}</div>
                    @endif
                    <div class="col-md-12 mb-2 techList"></div>
                </div>
            </div>
            <hr>


        </div>
        <div class="box-footer">
            <div class="form-group">
                <input type="submit" class="btn btn-primary m-1" value="Save">
                <a href="{{ route('admin.casestudy') }}" class="btn btn-danger m-1">Cancel</a>
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