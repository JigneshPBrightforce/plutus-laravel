@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Portfolio</span></li>
                        <li class="breadcrumb-item active" aria-current="page">Simpliworks</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Simpliworks</h3>
                    <p class="sub-dec ms-4 mt-4">Reshyne helps companies make the most of their repairs business. </p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('portfolio_images/Reshyne/reshyne.svg') }}" class="" alt="">
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
        <p class="sub-dec">From a customer-facing service-based storefront to dynamic operations and management tools that lead to revenue
            growth and business success. Offer your customers a fully branded repair experience that allows them to browse services, place orders,
            print out shipping labels, and track progress, all directly from your website. Reshyne makes the process
            seamless, secure, and completely contact-free to keep your customers confident, satisfied, and coming back for more.<br>

            Payment Gateway Integration:
Payment services used across the Reshyne for payment. Integrated stripe payment gateway along with transaction failure
handling mechanism, refund mechanism, stripe connect etc.
<br>

Shipping Integration:
Shipping services used across the Reshyne for shipping. Integrated EasyPost shipping along with a carrier account mechanism,
shipping rates, download label, tracking shipment, etc.
</p>
    </div>
</div>
<div class="about_portfolio space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Reshyne</h3>
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
                        <p>New York
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Targeted Audience</h3>
                        <p>Jewelry reparis store 
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Industry</h3>
                        <p>E-commerce
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
                    <img src="{{ asset('image/react-2.svg') }}" alt="slide 1">
                    <h3>ReactJS</h3>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-box">
                    <img src="{{ asset('image/python.svg') }}" alt="slide 1">
                    <h3>Python</h3>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="industry-box">
                    <img src="{{ asset('image/Ionic-logo.svg') }}" alt="slide 1">
                    <h3>Ionic</h3>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="industry-box">
                    <img src="{{ asset('image/Java-logo.svg') }}" alt="slide 1">
                    <h3>Java</h3>
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