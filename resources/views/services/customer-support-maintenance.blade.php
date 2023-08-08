@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="services">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Support & Maintenance</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Support & Maintenance</h3>
                    <p class="sub-dec ms-4 mt-4">We offer top-notch customer support and maintenance services to help businesses reach their customers faster and gain a competitive advantage with a quicker time-to-market at a significantly reduced cost. We provide comprehensive solutions that will reduce the total cost of ownership for your business & help you reach your target customers faster.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">

            </div>
        </div>
    </div>
</div>
<div class="about-ios-app-development">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Support & Maintenance</h3>
        <p class="sub-dec">We offer a comprehensive range of support & maintenance services to ensure your website is up 
            and running smoothly at its peak performance and maximum efficiency. On-site maintenance, remote monitoring, and 
            on-demand support services are just a few of the services we offer that come with 100% customer satisfaction guaranteed.
             Plutus Technologies has enabled IT businesses to meet the challenge of ongoing product support and maintenance with a range
              of services designed to significantly lower maintenance costs and ensure timely response & guarantee service. Customer 
              satisfaction is our top priority & we strive to provide end-to-end support and maintenance services to worldwide customers.
               Throughout the lifecycle of a system, we offer unmatched maintenance and support services to ensure your business is on top. </p>
               <p class="sub-dec">If you are looking for professional customer support & maintenance services to manage your business and products & services more
                 effectively, we can help. In addition to offering fast and affordable support & maintenance for high-volume websites, we also provide technical support, 
                 user support, and ongoing content updates. Reliable and highly available technical support will help your company retain customers.
                 Let us help you support and maintain your business website to ensure they are up-to-date and running smoothly at its peak.</p>
    </div>
    <div class="container aos-init" data-aos="fade-up">

        <img class="img-fluid" src="{{ asset('image/agile-process.svg') }}" alt="">

    </div>
</div>
<section class="blog-wrap space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="home-page-title d-flex align-items-center justify-content-center">Blog</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="300">
        <div class="listing-view">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                    <div class="blog-listing-box">
                        <div class="listing-sm-img">
                            <a href="blog-details"
                                aria-label="How AI is transforming the way businesses operate and compete?">
                                <img src="{{ asset('image/hm-ai-in-business-transforming-banner.webp') }}"
                                    alt="AI is transforming the way businesses operate and compete" width="350"
                                    height="210">
                            </a>
                        </div>
                        <div class="blog-listing-detail">
                            <span class="category">Web Development</span>
                            <a href="blog-details" aria-label="More from our Blog">How AI is transforming the
                                way businesses operate
                                and compete?</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                    <div class="blog-listing-box">
                        <div class="listing-sm-img">
                            <a href="blog-details" aria-label="Google BARD Vs Chat GPT: the ultimate battle">
                                <img src="{{ asset('image/hm-the-impact-of-ai-on-customer-banner1.webp') }}"
                                    alt="The impact of AI on customer service and experience" width="350" height="210">
                            </a>
                        </div>
                        <div class="blog-listing-detail">
                            <span class="category">Web Development</span>
                            <a href="blog-details" aria-label="More from our Blog">Google BARD Vs Chat GPT: the
                                ultimate battle</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 blog-listing-box-main">
                    <div class="blog-listing-box">
                        <div class="listing-sm-img">
                            <a href="blog-details" aria-label="Artificial Intelligence Myths VS Reality">
                                <img src="{{ asset('image/hm-ai-myths-vs-reality-banner.webp') }}" alt="ai" width="350"
                                    height="210">
                            </a>
                        </div>
                        <div class="blog-listing-detail">
                            <span class="category">Web Development</span>
                            <a href="blog-details" aria-label="More from our Blog">Artificial Intelligence
                                Myths VS Reality</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-box text-center">
            <a class="btn-orange" aria-label="More from our Blog" href="blog">More From
                our Blog</a>
        </div>
    </div>
</section>
<section class="portfolio-section" id="portfolio">
    <div class="container">
        <div class="container aos-init" data-aos="fade-up">
            <h3 class="home-page-title d-flex align-items-center justify-content-center">Our Work</h3>
        </div>
        <ul class="row portfolio-item aos-init" data-aos="fade-up" data-aos-delay="300">
            <li class="mix wp col-xl-8 col-md-6 col-12 col-sm-6 pd">
                <img src="{{ asset('image/reshyne.jpg') }}" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Project Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in"
                            href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="mix dev col-xl-4 col-md-6 col-12 col-sm-6 pd ">
                <img src="{{ asset('image/RSD.jpg') }}" alt="Image description">
                <div class="portfolio-overlay">
                    <div class="overlay-content">
                        <p class="category">Project Name</p>
                        <a href="#" title="View Project" target="_blank">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                        <a data-fancybox="item" title="click to zoom-in"
                            href="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            data-size="1200x600">
                            <div class="magnify-icon">
                                <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

@include('inquiryform')

@push('extra-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css" rel="stylesheet">
@endpush
@push('extra-js-scripts')

<script src="{{ asset('js/swiper-bundle.min.js') }}?t=<?php echo time();?>"></script>
<script src="{{ asset('js/swiper.min.js') }}?t=<?php echo time();?>"></script>
<script>
var swiper = new Swiper('.swiper-container.two', {
    autoplay: {
        enabled: true,
        delay: 2000
    },
    pagination: '.swiper-pagination',
    paginationClickable: true,
    effect: 'coverflow',
    loop: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflow: {
        rotate: 0,
        stretch: 100,
        depth: 150,
        modifier: 1.5,
        slideShadows: false,
    }
});
</script>
@endpush
@endsection