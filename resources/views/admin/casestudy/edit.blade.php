@extends('layouts.admin')
@push('extra-css')
@endpush
@section('content')
<form id="general-info" name="frmUpdateProfile" method="POST" enctype="multipart/form-data" action="{{ route('admin.casestudy.update') }}">
    @csrf
    <input type="hidden" name="action" value="{{ $arrData->id }}">
    <div class="box">
        <div class="box-body">
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Project Type</label>
                <div class="col-md-4">
                    <select class="form-control" id="project_type" name="project_type">
                        <option value="0" <?php echo ($arrData->project_type == 0) ? 'selected' : ''; ?>>Web</option>
                        <option value="1" <?php echo ($arrData->project_type == 1) ? 'selected' : ''; ?>>Mobile</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">casestudy Name</label>
                <div class="col-md-4">
                    <input id="name" type="text" class="form-control" name="project_name" value="{{ $arrData->project_name }}" placeholder="" autocomplete="name" autofocus>
                    @if($errors->has('project_name'))
                    <div class="error">{{ $errors->first('project_name') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">Short description</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="project_short_description" value="{{ $arrData->project_short_description }}">
                    @if($errors->has('project_short_description'))
                    <div class="error">{{ $errors->first('project_short_description') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">Long description</label>
                <div class="col-md-4">
                    <textarea name="project_long_description" class="ckeditor form-control">
                    {{ $arrData->project_long_description }}</textarea>
                    @if($errors->has('project_long_description'))
                    <div class="error">{{ $errors->first('project_long_description') }}</div>
                    @endif
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Logo</label>
                <div class="col-md-4">
                    <input type="file" accept="image/*" name="project_logo" data-max-size="2M" class="dropify" data-default-file="{{$arrData->project_logo ? asset($arrData->project_logo) : ''}}" id="project_logo" />
                    @if($errors->has('project_logo'))
                    <div class="error">{{ $errors->first('project_logo') }}</div>
                    @endif
                </div>
                <div class="col-md-4">
                    <img src="{{ asset($arrData->project_logo) }} " width="250" class="mt-2 border">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Banner</label>
                <div class="col-md-4">
                    <input type="file" accept="image/*" name="project_banner" data-max-size="2M" class="dropify" data-default-file="{{$arrData->project_banner ? asset($arrData->project_banner) : ''}}" id="project_banner" />
                    @if($errors->has('project_banner'))
                    <div class="error">{{ $errors->first('project_banner') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Image</label>
                <div class="col-md-4">
                    <input type="file" accept="image/*" name="project_image" data-max-size="2M" class="dropify" data-default-file="{{$arrData->project_image ? asset($arrData->project_image) : ''}}" id="project_image" />
                    @if($errors->has('project_image'))
                    <div class="error">{{ $errors->first('project_image') }}</div>
                    @endif
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">About title</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="about_title" value="{{ $arrData->about_title }}">
                    @if($errors->has('about_title'))
                    <div class="error">{{ $errors->first('about_title') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">Country name</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="country_name" value="{{ $arrData->country_name }}">
                    @if($errors->has('country_name'))
                    <div class="error">{{ $errors->first('country_name') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">Targeted audience</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="targeted_audience" value="{{ $arrData->targeted_audience }}">
                    @if($errors->has('targeted_audience'))
                    <div class="error">{{ $errors->first('targeted_audience') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">Industry</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="industry" value="{{ $arrData->industry }}">
                    @if($errors->has('industry'))
                    <div class="error">{{ $errors->first('industry') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Technology </label>
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
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Carosoul banner</label>
                <div class="col-md-4">
                    <input type="file" accept="image/*" name="screenshort_banner" data-max-size="2M" class="dropify" data-default-file="{{$arrData->screenshort_banner ? asset($arrData->screenshort_banner) : ''}}" id="screenshort_banner" />
                    @if($errors->has('screenshort_banner'))
                    <div class="error">{{ $errors->first('screenshort_banner') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Carosoul Images</label>
                <div class="col-md-4">
                    <input type="file" multiple accept="image/*" name="screenshort_images[]" data-max-size="2M" class="dropify" data-default-file="{{$arrData->screenshort_images ? asset($arrData->screenshort_images) : ''}}" id="screenshort_images" />
                    @if($errors->has('screenshort_images'))
                    <div class="error">{{ $errors->first('screenshort_images') }}</div>
                    @endif
                </div>
                <div class="col-md-4">
                    <?php
                    $ssImages = explode(',', $arrData->screenshort_images);
                    foreach ($ssImages as $file) {
                        echo '<img src="' . asset($file) . '" width="250" class="mt-2 border" >';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
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
    var techarray = <?php echo json_encode(explode(",", $arrData->technology)); ?>

    $(document).ready(function() {
        $('.dropify').dropify();
        $('.ckeditor').ckeditor();
    });
    setTimeout(() => {
        setTechtohtml();
    }, 1000);

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
          
    }
</script>
@endpush