@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Portfolio</span></li>
                        <li class="breadcrumb-item active" aria-current="page">Offsite</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Offsite</h3>
                    <p class="sub-dec ms-4 mt-4">Offsight solves the delivery, quality, traceability and communication challenges of modular/offsite construction and project-based manufacturing with our easy to use mobile software. </p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('portfolio_images/Offsite/offsite.png') }}" width="300" class="" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <img class="w-100" src="{{ asset('portfolio_images/Offsite/reshyne_topbanner.jpg') }}">
</div>
<div class="portfolio-detail">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <p class="sub-dec">Offsight solves the delivery, quality, traceability and communication challenges of modular/offsite construction and project-based manufacturing with our easy to use mobile software.</p>
        <p class="sub-dec mt-3">We enable collaboration between project managers, quality inspectors, production supervisors, architects, general contractors and developers to ensure your offsite projects stay on track. </p>
        <p class="sub-dec mt-3">If you're thinking about going offsite/modular or ready to take the next step to streamline your quality and productivity, this is the app for you.</p>
        <ul>
            <li>Manage factory assembly of all offsite products and components, track project status and provide daily updates to stakeholders</li>
            <li>Identify, resolve, and report all non-conformance/quality and assembly errors before your products leave the factory floor</li>
            <li>Take, add, and annotate photos using our camera functionality to capture quality issues and provide verification for sign-offs</li>
            <li>Enable app and email alerts to automatically link assembly progress with your delivery schedule and get alerted when quality issues occur that affect client delivery</li>
            <li>Integrate with third party cloud and construction applications to view all necessary designs and digital materials during assembly</li>
        </ul>
    </div>
</div>
<div class="about_portfolio space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Offsite</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <div class="core-value-boxx-main">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="tagline">
                        <h2>Deliver reliable & quality
                            software development services</h2>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="core-value-detail-box">
                        <h3>Country</h3>
                        <p>Canada</p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Targeted Audience</h3>
                        <p>Engineering employees</p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Industry</h3>
                        <p>Business</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="industry-verticals technology-expertise">
    <div class="container">
        <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"> <span></span>Technology Used
        </h3>
    </div>
    <div class="container industry-verticals-box-row">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-box">
                    <img src="{{ asset('image/ios.svg') }}" alt="slide 1">
                    <h3>iOS</h3>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-box">
                    <img src="{{ asset('image/objective_c.svg') }}" alt="slide 1">
                    <h3>Objective C</h3>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="portfolio-slider" style="background-image:url('portfolio_images/reshyne_bg.jpg');background-repeat: no-repeat;background-size: cover;">
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/Offsite/Offsight_-(1).jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images//Offsite/Offsight_-(2).jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images//Offsite/Offsight_-(3).jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images//Offsite/Offsight_-(4).jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images//Offsite/Offsight_-(5).jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images//Offsite/Offsight_-(6).jpg') }}">
    </div>
    <!-- <div>
            <img class="w-100" src="{{ asset('Portfolio/RSD_splash.jpg') }}">
        </div>
        <div>
            <img class="w-100" src="{{ asset('Portfolio/RSD_tracks.jpg') }}">
        </div> -->
</div>
<section class="blog-wrap space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">You May Also Like</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="300">

        <ul class="row portfolio-item">
            <li class="mix web col-xl-6 col-md-6 col-12 col-sm-6 pd position-relative">
                <img src="portfolio_images/incometax.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Incometax</h3>
                        <p class="category">Reshyne helps companies make the most of their repairs business.</p>
                        <a href="reshyne_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix col-xl-6 col-md-6 col-12 col-sm-6 pd position-relative">
                <img src="portfolio_images/applebees.jpg"
                    alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">.Net</span>
                        <h3 class="category">Applebees</h3>
                        <p class="category">Reshyne helps companies make the most of their repairs business.</p>
                        <a href="reshyne_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
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
    slidesToShow: 2,
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});
</script>

@endpush

@endsection