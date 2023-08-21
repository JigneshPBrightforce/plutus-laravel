@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Portfolio</span></li>
                        <li class="breadcrumb-item active" aria-current="page">Agrotrade</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Agrotrade</h3>
                    <p class="sub-dec ms-4 mt-4">Explore the new dimension of foodstuff importing experience.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('portfolio_images/agrotrade/agrotrade-logo.svg')}}" class="" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <img class="w-100" src="{{ asset('portfolio_images/RSD/rsd_top_banner.jpg')}}">
</div>
<div class="portfolio-detail">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <p class="sub-dec">Hello!!! I’m Ashish Babaria - an Agro Trade Specialist (make sure it’s not my company name, but it’s me only), serving certain & renowned Foodstuff importers from Middle east & EU through trade intermediation services since 2016.</p>
        <p class="sub-dec">Through this app I’d like to offer the whole new experience of foodstuff importation process and decisions, to my existing & prospective clients.</p>
        <ul class="mb-0">
            <li>The App offers</li>
            <li>Price Updates</li>
            <li>Price Alerts</li>
            <li>Quote Requests</li>
            <li>My orders (upcoming feature)</li>
            <li>Market Reports (upcoming feature)</li>
        </ul>
    </div>
</div>
<div class="about_portfolio space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Agrotrade</h3>
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
                        <p>Denmark
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Targeted Audience</h3>
                        <p>Item Traders,
                            Individuals looking to buy or sell used items
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Industry</h3>
                        <p>E-commerce, Items Trading
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
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-box">
                    <img src="{{ asset('image/Flutter-logo.svg')}}" alt="slide 1">
                    <h3>Flutter</h3>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-box">
                    <img src="{{ asset('image/stripe.svg')}}" alt="slide 1">
                    <h3>Stripe</h3>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="portfolio-slider">
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/agrotrade/communication.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/agrotrade/login.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/agrotrade/notification.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/agrotrade/pricealert.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/agrotrade/request.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/agrotrade/verification.jpg') }}">
    </div>
    <!-- <div>
        <img class="w-100" src="{{ asset('portfolio_images/RSD/RSD_splash.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/RSD/RSD_tracks.jpg') }}">
    </div> -->
</div>
<section class="blog-wrap space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">You May Also Like</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="300">

        <ul class="row portfolio-item">
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd position-relative">
                <img src="portfolio_images/recovr.jpg" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">Recover</h3>
                        <p class="category">A digital marketplace that provides affordable and accessible rehab and recovery content to users globally. </p>
                        <a href="recovr_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd position-relative">
                <img src="portfolio_images/ste.jpg" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">Skill Trade Exam</h3>
                        <p class="category">Study for your exam from anywhere.</p>
                        <a href="skilltrade_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
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
    slidesToShow: 4,
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
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