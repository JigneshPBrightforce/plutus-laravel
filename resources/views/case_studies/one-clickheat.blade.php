@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">1 1ClickHeat App</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>1Clickheat App</h3>
                    <p class="sub-dec ms-4 mt-4">1ClickHeat allows you to add tenants, purchase HVAC units, and more.</p> 
                    <ul class="ms-4 project-url">
                        <li>
                            <p class="sub-dec">Apple Store URL: <a href="https://itunes.apple.com/us/app/easy-heat/id1348661990?mt=8" class="d-block" target="_blank">https://itunes.apple.com/us/app/easy-heat/id1348661990?mt=8</a></p>
                        </li>
                        <li>
                            <p class="sub-dec">Google Play URL: <a href="https://play.google.com/store/apps/details?id=com.mobilithink.easyheat" class="d-block" target="_blank">https://play.google.com/store/apps/details?id=com.mobilithink.easyheat</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('case_studies/one_click_heat/logo.png')}}" class="" alt="">
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="portfolio-detail">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <p class="sub-dec">1ClickHeat allows you to add tenants, purchase HVAC units, and more. You can also Request
Service at a touch of a button. 1ClickHeat makes HVAC easy. Whether you are a property
manager, contractor or a tenant this app is for you.</p>
    </div>
</div>
<div class="about_portfolio space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About 1ClickHeat App</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <div class="core-value-boxx-main">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="tagline">
                        <h2>Module details</h2>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="core-value-detail-box">
                        <h3>User Module</h3>
                        <p>With the help of this module, End user, property manager registers and login to the application.
Also, CRM users can create new user with this module. User is also managing his own profile.
User can also login with Facebook.
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Billing</h3>
                        <p>CRM users can create billing for the incoming workorders, also search and view the previous
billing for users.
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Workorder</h3>
                        <p>End user, property manager or tenant can rise service request or installation request. That
comes under the workorder module. Admin user can search and view the workorder as well.
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Invoice</h3>
                        <p>Every user can see its own invoice for the related workorder and CRM user can see all invoice as
well. Also, User can send invoice to an email
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Payment</h3>
                        <p>After generating workorder user can do payments related to the workorder.
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Address</h3>
                        <p>User can add more address and manage them as well.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Team size</h3>
        <div class="team-size d-flex align-items-center flex-wrap">
            <div class="badge badge-primary me-3 mt-4">
                Project manager
                <span class="team-count">1</span>
            </div>
            <div class="badge badge-primary me-3 mt-4">
                Designer
                <span class="team-count">1</span>
            </div>
            <div class="badge badge-primary me-3 mt-4">
                Developers
                <span class="team-count">3</span>
            </div>
            <div class="badge badge-primary mt-4">
                QA
                <span class="team-count">1</span>
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
                    <img src="{{ asset('image/android.svg')}}" alt="slide 1">
                    <h3>Android</h3>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-box">
                    <img src="{{ asset('image/swift.svg')}}" alt="slide 1">
                    <h3>iOS Swift</h3>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="portfolio-slider">
    <div>
        <img class="w-100" src="{{ asset('case_studies/one_click_heat/1.png') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('case_studies/one_click_heat/2.png') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('case_studies/one_click_heat/3.png') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('case_studies/one_click_heat/4.png') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('case_studies/one_click_heat/5.png') }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('case_studies/one_click_heat/6.png') }}">
    </div> 
</div>
<div class="bg-lightblue space">
    <div class="container aos-init justify-content-center" data-aos="fade-up">         
        <h3 class="subtitle text-center mb-4">Next Project</h3>
        <ul class="ms-4 project-url text-center">
            <li>
                <a href="" class="d-block" target="_blank">Clubify</a>
            </li> 
        </ul>
    </div>
</div>  
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