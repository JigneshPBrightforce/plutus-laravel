@extends('layouts.admin')
@push('extra-css')
@endpush
@section('content')
<!-- Info boxes -->

<!-- Default box -->
<form id="general-info" name="frmUpdateProfile" method="POST" enctype="multipart/form-data"
    action="{{ route('admin.portfolio.update') }}">
    @csrf
    <input type="hidden" name="action" value="{{ $arrData->id }}">

    <div class="box">
        <div class="box-body">
            <div class="form-group row">
                <label for="name" class="col-md-2 required col-form-label text-md-right">portfolio Name</label>
                <div class="col-md-4">
                    <input id="portfolio_name" type="text"
                        class="form-control @error('portfolio Name') is-invalid @enderror" name="project_name"
                        value="{{ $arrData->project_name }}" placeholder="" autocomplete="portfolio_name" autofocus>
                    @if($errors->has('project_name'))
                    <div class="error">{{ $errors->first('project_name') }}</div>
                    @endif
                </div>
            </div>
            -------------

            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">Portfolio Name</label>
                <div class="col-md-4">
                    <input id="name" type="text" class="form-control" name="project_name"
                        value="{{ $arrData->project_name }}" placeholder="" autocomplete="name" autofocus>
                    @if($errors->has('project_name'))
                    <div class="error">{{ $errors->first('project_name') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">Short description</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="project_short_description"
                        value="{{ $arrData->project_short_description }}">
                    @if($errors->has('project_short_description'))
                    <div class="error">{{ $errors->first('project_short_description') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2  col-form-label text-md-right">Long description</label>
                <div class="col-md-4">
                    <textarea name="project_long_description"
                        class="form-control">{{ $arrData->project_long_description }}</textarea>
                    @if($errors->has('project_long_description'))
                    <div class="error">{{ $errors->first('project_long_description') }}</div>
                    @endif
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Logo</label>
                <div class="col-md-4">
                    <img src="{{ asset($arrData->project_logo) }}" width="100" />
                    <input type="file" accept="image/*" name="project_logo"
                        data-default-file="{{$arrData->project_logo ? asset($arrData->project_logo) : ''}}"
                        id="project_logo" />
                    @if($errors->has('project_logo'))
                    <div class="error">{{ $errors->first('project_logo') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Banner</label>
                <div class="col-md-4">
                    <img src="{{ asset($arrData->project_banner) }}" width="100" />
                    <input type="file" accept="image/*" name="project_banner"
                        data-default-file="{{$arrData->project_banner ? asset($arrData->project_banner) : ''}}"
                        id="project_banner" />
                    @if($errors->has('project_banner'))
                    <div class="error">{{ $errors->first('project_banner') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Image</label>
                <div class="col-md-4">
                    <img src="{{ asset($arrData->project_image) }}" width="100" />
                    <input type="file" accept="image/*" name="project_image"
                        data-default-file="{{$arrData->project_image ? asset($arrData->project_image) : ''}}"
                        id="project_image" />
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
                    <input type="text" class="form-control" name="targeted_audience"
                        value="{{ $arrData->targeted_audience }}">
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
                    {{ $arrData->technology }}
                    @if($errors->has(' technology'))
                    <div class="error">{{ $errors->first('	technology') }}</div>
                    @endif
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">Carosoul banner</label>
                <div class="col-md-4">
                    <img src="{{ asset($arrData->screenshort_banner) }}" width="100" />
                    <input type="file" accept="image/*" name="screenshort_banner"
                        data-default-file="{{$arrData->screenshort_banner ? asset($arrData->screenshort_banner) : ''}}"
                        id="screenshort_banner" />
                    @if($errors->has('screenshort_banner'))
                    <div class="error">{{ $errors->first('screenshort_banner') }}</div>
                    @endif
                </div>
            </div>


        </div>

        <div class="box-footer">
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
                <a href="{{ route('admin.portfolio') }}" class="btn btn-danger m-1">Cancel</a>
            </div>
        </div>
        <!-- /.box-footer-->
    </div>
</form>
<!-- /.box -->
@endsection
@push('extra-js-scripts')
<script type="text/javascript">
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