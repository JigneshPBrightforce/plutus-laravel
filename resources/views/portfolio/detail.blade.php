@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Portfolio</span></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $portfolio->project_name }}</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>{{ $portfolio->project_name }}</h3>
                    <p class="sub-dec ms-4 mt-4">{{ $portfolio->project_short_description }}</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset($portfolio->project_logo)}}" class="" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <img class="w-100" src="{{ asset($portfolio->project_banner)}}">
</div>
<div class="portfolio-detail">
    <div class="container space aos-init description" data-aos="fade-up" data-aos-delay="400">
        {!! $portfolio->project_long_description !!}
    </div>
</div>
<div class="about_portfolio space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Recovr</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <div class="core-value-boxx-main">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="tagline">
                        <h2>{{ $portfolio->about_title }}</h2>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="core-value-detail-box">
                        <h3>Country</h3>
                        <p>{{ $portfolio->country_name }}</p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Targeted Audience</h3>
                        <p>{{ $portfolio->targeted_audience }}</p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Industry</h3>
                        <p>{{ $portfolio->industry }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if($portfolio->technology != '')
<div class="industry-verticals technology-expertise">
    <div class="container">
        <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"> <span></span>Technology Used
        </h3>
    </div>
    <div class="container industry-verticals-box-row">
        <div class="row">
            @foreach ($technology as $tech)
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-box">
                    <img src="{{ asset($tech->logo) }}" alt="slide 1">
                    <h3>{{$tech->tech_name}}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
@if($portfolio->screenshort_images != '')
<?php $ss = explode("," ,$portfolio->screenshort_images);?>
<div class="portfolio-slider"
    style="background-image:url('{{ asset($portfolio->screenshort_banner) }}');background-repeat: no-repeat;background-size: cover;">
    @foreach($ss as $img)
    <div>
        <img class="w-100" src="{{ asset($img) }}">
    </div>
    @endforeach
</div>
@endif
<section class="blog-wrap space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">You May Also Like</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="300">
        <ul class="row portfolio-item">
            @foreach($suggetion as $data)
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd position-relative">
                <img src="{{ asset($data->project_image) }}" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">{{$data->technology}}</span>
                        <h3 class="category">{{$data->project_name}}</h3>
                        <p class="category">{{$data->project_short_description}}</p>
                        <a href="{{ url('portfolio/'. $data->slug) }}" title="View Project" target="_blank"
                            class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@include('inquiryform')


@push('extra-css')
<!-- magnific-popup -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css" rel="stylesheet">
@endpush
@push('extra-js-scripts')
<!-- Mixitup -->
<script src="{{ asset('js/slick.min.js') }}?t=<?php echo time();?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

<script>
$('.portfolio-slider').slick({
    centerMode: true,
    centerPadding: '60px',
    autoplay: true,
    slidesToShow: <?php echo $portfolio->project_type === 1 ? 5 : 2 ;?>,
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: <?php echo $portfolio->project_type === 1 ? 3 : 1 ;?>,
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: <?php echo $portfolio->project_type === 1 ? 1 : 1 ;?>,
            }
        }
    ]
});
</script>

@endpush

@endsection