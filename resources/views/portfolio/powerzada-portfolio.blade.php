@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Portfolio</span></li>
                        <li class="breadcrumb-item active" aria-current="page">Powerzada</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Powerzada</h3>
                    <p class="sub-dec ms-4 mt-4">Charge your devices, in any place, at any time, if you have to leave them behind or worry about cables.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('portfolio_images/powerzada/powerzada_logo.png')}}" class="" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <img class="w-100" src="{{ asset('portfolio_images/STE/top_banner _ste.jpg')}}">
</div>
<div class="portfolio-detail">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <p class="sub-dec">Charge your devices, in any place, at any time, if you have to leave them behind or worry about cables. Or our powerbanks accommodation service gives you the freedom and convenience you need!</p>
        <p class="sub-dec mt-3">The Powerzada charging stations can be found in bars, restaurants, shopping malls, hotels and many other places.</p>
        <p class="sub-dec mt-3">The Powerzada App allows you to locate our stations and, after you contact us, it only takes a few seconds to find places or return a powerbank.</p>
        <p class="sub-dec mt-3">As powerbanks, Powerzada charges any type of smartphone, thanks to the three charging cables included: Lightning, USB-C, Micro-USB. You can carry most two smartphones and tablets (Apple, Asus, Blackberry, HTC, Honor, Huawei, LG, Nexus, Nokia, OnePlus, Samsung, Sony, Xiaomi...), as well as many other electronic devices, such as Bluetooth phones, Smartwatches/Smartbands, IQOS, cameras, laptops and gamepads.</p>
        <p class="sub-dec mt-3">They are also ultra-efficient, with the use of Fast Charge technology, they charge all devices quickly, with the capacity for two full charges, on average.</p>
    </div>
</div>
<div class="about_portfolio space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Powerzada</h3>
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
                    <img src="{{ asset('image/dart.svg')}}" alt="slide 1">
                    <h3>Dart</h3>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="industry-box">
                    <img src="{{ asset('image/Ionic-logo.svg')}}" alt="slide 1">
                    <h3>GetX</h3>
                </div>
            </div>
            <!-- <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="industry-box">
                    <img src="{{ asset('image/Java-logo.svg')}}" alt="slide 1">
                    <h3>Java</h3>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="portfolio-slider" style="background-image:url('portfolio_images/ste_bg.jpg');background-repeat: no-repeat;background-size: cover;">
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/STE/STE_Dashboard_page.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/STE/STE_Exam_page.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/STE/STE_Login_page.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/STE/STE_Result_page.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/STE/STE_splash_page.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/STE/STE_Summary_page.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('portfolio_images/STE/STE_Test_page.jpg') }}">
    </div>
    <!-- <div>
        <img class="w-100" src="{{ asset('Portfolio/STE/s.jpg') }}">
    </div> -->
</div>
<section class="blog-wrap space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">You May Also Like</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="300">
        <ul class="row portfolio-item">
            <li class="mix flutter col-xl-6 col-md-6 col-12 col-sm-6 pd position-relative">
                <img src="portfolio_images/emvite.jpg" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Flutter</span>
                        <h3 class="category">Emvite</h3>
                        <p class="category">A digital marketplace that provides affordable and accessible rehab and recovery content to users globally.</p>
                        <a href="emvite_portfolio" title="View Project" target="_blank" class="cursor-hover btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
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
    slidesToShow: 5,
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 4
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