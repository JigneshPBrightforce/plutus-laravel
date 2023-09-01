@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Portfolio</span></li>
                        <li class="breadcrumb-item active" aria-current="page">Bidalift user</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Bidalift user</h3>
                    <p class="sub-dec ms-4 mt-4">Save money by being in control of what you pay! Enter a bid YOU feel is fair for your ride.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('portfolio_images/Bidalift/Logo.webp') }}" width="200" class="" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <img class="w-100" src="{{ asset('portfolio_images/Reshyne/reshyne_topbanner.jpg') }}">
</div>
<div class="portfolio-detail">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <p class="sub-dec">Save money by being in control of what you pay! Enter a bid YOU feel is fair for your ride. All drivers in the area will receive your bid and compete for YOUR business!</p>
    </div>
</div>
<div class="about_portfolio space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Bidalift</h3>
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
                        <p>United States
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Targeted Audience</h3>
                        <p>Travel
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Industry</h3>
                        <p>Travel
                        </p>
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
            <div class="col-12 col-md-3 col-lg-3 aos-init d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-box d-flex flex-column h-auto w-100">
                    <img src="{{ asset('image/swift.svg') }}" alt="slide 1">
                    <h3>iOS Swift</h3>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 aos-init d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-box d-flex flex-column h-auto w-100">
                    <img src="{{ asset('image/firebase-1.svg') }}" alt="slide 1">
                    <h3>Firebase push notifications</h3>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="portfolio-slider" style="background-image:url('portfolio_images/reshyne_bg.jpg');background-repeat: no-repeat;background-size: cover;">
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/Reshyne/reshyne-invoice.png') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/Reshyne/reshyne-login.png') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/Reshyne/reshyne-pricelist.png') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/Reshyne/reshyne-service.png') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/Reshyne/reshyne-store-1.png') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/Reshyne/reshyne-store.png') }}">
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