@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">RSD</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Ready Set Dance</h3>
                    <p class="sub-dec ms-4 mt-4">We are the fastest growing Website Development company having a
                        team of expert
                        programmers. Hire PHP developers who help your business grow bigger and faster
                        in the digital world.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('image/android-development-banner-image.svg')}}" class="" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <img class="w-100" src="{{ asset('image/rsd_top.png')}}">
</div>
<div class="portfolio-detail">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <p class="sub-dec"><span>READY SET DANCE</span> is the award winning dance curriculum taking the world by
            storm!<br>

            This App is the curriculum powered by <span>READY SET DANCE</span>. It is available to teachers using
            the <span>READY SET DANCE</span> program only.<br>

            With <span>READY SET DANCE</span>, you no longer need to plan, search for, or create new content. It’s
            all done for you! A whole dance class ready to play from your pocket? But that’s not all,
            community support, big budget marketing, and class resources are all available to you.</p>
    </div>
</div>
<div class="about_portfolio space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Ready Set Dance</h3>
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
                    <img src="{{ asset('image/Kotlin-logo.svg')}}" alt="slide 1">
                    <h3>Kotlin</h3>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="industry-box">
                    <img src="{{ asset('image/Ionic-logo.svg')}}" alt="slide 1">
                    <h3>Ionic</h3>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="industry-box">
                    <img src="{{ asset('image/Java-logo.svg')}}" alt="slide 1">
                    <h3>Java</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-slider">
    <div>
        <img class="w-100" src="{{ asset('Portfolio/RSD_favorites.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('Portfolio/RSD_login.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('Portfolio/RSD_newa.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('Portfolio/RSD_onboarding.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('Portfolio/RSD_playlists.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('Portfolio/RSD_setting.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('Portfolio/RSD_splash.jpg') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('Portfolio/RSD_tracks.jpg') }}">
    </div>
</div>
<section class="blog-wrap space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">You May Also Like</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="300">

        <ul class="row portfolio-item">
            <li class="col-xl-6 col-md-6 col-12 col-sm-6 pd position-relative">
                <img src="{{ asset('image/reshyne.jpg') }}" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Android</span>
                        <h3 class="category">RapidParty</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
                            View
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-xl-6 col-md-6 col-12 col-sm-6 pd position-relative">
                <img src="{{ asset('image/reshyne.jpg') }}" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <span class="overlay-content-badge">Python</span>
                        <h3 class="category">Project Name</h3>
                        <p class="category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" title="View Project" target="_blank" class="btn btn-white">
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
<script src="{{ asset('js/slick.min.js') }}"></script>
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