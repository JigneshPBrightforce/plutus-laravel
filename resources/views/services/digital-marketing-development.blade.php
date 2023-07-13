@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Digital Marketing</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Digital Marketing</h3>
                    <p class="sub-dec ms-4 mt-4">Revolutionize your digital marketing strategy with Plutustec's
                        acute solutions. Boost your online presence, engage your target audience, and drive
                        conversions through expertly crafted campaigns. Stay ahead in the digital landscape with
                        leading edge digital Marketing services strategies to enhance your online presence, drive
                        targeted traffic, and boost conversions.
                        From SEO and PPC to social media management and content creation, we deliver measurable
                        results that propel your business forward. You can maximize the success and impact of your
                        marketing efforts when we optimize them.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('image/digitalmarketing-development-banner-image.svg') }}" class="w-100"
                        alt="banner">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-ios-app-development">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Digital Marketing</h3>
        <p class="sub-dec">Digital Marketing services empower organizations to effectively promote their products or
            brands using diverse online platforms and social media. Unlike traditional marketing methods, Digital
            Marketing leverages multiple channels for creating and evaluating marketing campaigns, empowering
            organizations to identify the most effective channels for their goals. From social media to online
            advertising, Digital Marketing offers a wide range of opportunities for businesses to thrive in the
            digital landscape.
            With its multi-channel approach, Digital Marketing enables businesses to design and analyze their
            marketing campaigns, allowing them to determine the most appropriate channels for their unique
            requirements.

        </p>
    </div>
</div>
<div class="engagement-models ios-app-development-boxes bg-lightblue-100 space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Our Digital Marketing Services</h3>
    </div>
    <div class="container engagement-models-box-row">
        <div class="row">
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/digitalmarketing-development-box-1.svg') }}" class=""
                        alt="digital-service1">
                    <h3 class="mb-0">Enhanced SEO & SEM Solutions</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Enhanced SEO & SEM Solutions</h3>
                        <p>Within the vast expanse of the digital realm, where competition is fierce and visibility
                            is paramount, we present an unparalleled offering: our distinguished suite of SEO/SEM
                            services.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/digitalmarketing-development-box-2.svg') }}" class=""
                        alt="digital-service2">
                    <h3 class="mb-0">Strategically Orchestrated Pay-Per-Click (PPC) Solutions</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Strategically Orchestrated Pay-Per-Click (PPC) Solutions</h3>
                        <p>Our vanguard of PPC virtuosos remains steadfastly committed to staying at the forefront
                            of industry trends and algorithmic shifts. Using their extensive PPC knowledge and
                            experience, our experts develop campaigns specifically tailored for each client's needs
                            and goals.
                        </p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/digitalmarketing-development-box-3.svg') }}" class=""
                        alt="digital-service3">
                    <h3 class="mb-0">Social Media Marketing</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Social Media Marketing</h3>
                        <p>Countless techniques are employed by our team of experts to optimize your social media
                            campaigns in order to achieve the best results. We curate material that speaks to the
                            brand's message in a captivating and engaging way, leveraging persuasive language and
                            images to effectively deliver your brand's mission.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/digitalmarketing-development-box-4.svg') }}" class=""
                        alt="digital-service4">
                    <h3 class="mb-0">Email Marketing</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Email Marketing</h3>
                        <p>Email marketing entails the process of establishing communication with prospective
                            customers through the transmission of electronic mail. Our Digital Marketing Services
                            Company wants to help you establish a solid marketing plan by precisely defining your
                            target demographic and creating personalised email campaigns.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/digitalmarketing-development-box-5.svg') }}" class=""
                        alt="digital-service5">
                    <h3 class="mb-0">Content Marketing</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Content Marketing</h3>
                        <p>Content Marketing plays a pivotal role in the success of online enterprises, as it serves
                            as the lifeblood that sustains and propels them forward.You will have access to a wide
                            range of content marketing services including expertly planned campaigns effectively
                            expressing the brand's messaging to your clients.
                        </p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="700">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/digitalmarketing-development-box-6.svg') }}" class=""
                        alt="digital-service6">
                    <h3 class="mb-0">App & Web Analytics</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">App & Web Analytics</h3>
                        <p>Application and web analytics play a pivotal role in comprehending customer behavior and
                            formulating effective strategies to enhance conversion rates. With our digital marketing
                            agency, you can get in-depth insights into your business' operations through application
                            and web analytics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="benefits-ios space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Benefits of Digital Marketing
        </h3>
    </div>
    <div class="aos-init" data-aos="fade-up" data-aos-delay="200">
        <div class="row benefits-ios-row mx-0">
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-1">
                <div class="benefits-ios-box">
                    <h3>
                        Businesses benefit from digital marketing because the internet connects people around the
                        world. No matter where they are physically located, companies can reach audiences in
                        different countries and expand their customer base exponentially.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-2">
                <div class="benefits-ios-box">
                    <h3>
                        Digital marketing facilitates direct and instant communication with customers, fostering
                        improved customer engagement.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-3">
                <div class="benefits-ios-box">
                    <h3>
                        Whether it's adjusting advertising budgets, targeting different customer segments, or
                        launching new campaigns, digital marketing allows for quick and coherent changes.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-4">
                <div class="benefits-ios-box">
                    <h3>
                        Digital marketing can seamlessly integrate with offline marketing activities, creating a
                        cohesive and multi-channel marketing approach.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-5">
                <div class="benefits-ios-box">
                    <h3>
                        One of the key benefits of digital marketing is the ability to precisely target and
                        personalize marketing campaigns.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-6">
                <div class="benefits-ios-box">
                    <h3>
                        Digital advertising platforms, like social media and search engines, allow businesses to set
                        specific budgets and only pay for actual engagement or conversions.
                    </h3>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="strength">
    <div class="container">
        <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"> <span></span>Our Strength</h3>
        <div class="row heading-t aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="col-md-6">
                <img class="w-100" src="{{ asset('image/strength.svg') }}" alt="strength">
            </div>
            <div class="col-md-6 st-text mt-5">
                <h3>A team of proactive professionals is imbued with a passion for innovation and achieving digital
                    triumph. Our broad suite of services encompasses consulting, design, and development, including
                    the deployment of robust web applications, mobile apps, and bespoke software solutions.</h3>
                <p class="subtext">As a rapidly expanding IT service provider, we approach enterprise mobility
                    solutions with a fresh perspective. Along with highly skilled developers who meet the evolving
                    demands of the contemporary clients. Ensuring a expertise in web application development, mobile
                    app development, software testing, SEO, digital marketing, big data, and cloud consulting
                    services. Striving for client satisfaction with continuous support and assistance after sales.
                </p>
                <div class="row">
                    <div class="col-sm-6 col-lg-3 text-center count">
                        <span class="counter mb-0" data-count="150">150</span>
                        <span class="mb-0">+</span>
                        <p class="subtext">Project Launched</p>
                    </div>
                    <div class="col-sm-6  col-lg-3 text-center count">
                        <span class="counter mb-0" data-count="8">8</span>
                        <span class="mb-0">+</span>
                        <p class="subtext">Years of Experience</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center count">
                        <span class="counter mb-0" data-count="40">40</span>
                        <span class="mb-0">+</span>
                        <p class="subtext">Happy Clients</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center count">
                        <span class="counter mb-0" data-count="70">70</span>
                        <span class="mb-0">+</span>
                        <p class="subtext">Employees</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="call-to-action ios-call-to-action aos-init" data-aos="fade-up">
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="600">
        <div class="call-to-action-content">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h2>Let's Discuss Your Digital Marketing Idea</h2>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="contact-us" class="btn btn-primary">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="asked-questions space">
    <div class="container">
        <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"> <span></span>Frequently Asked
            Questions</h3>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="200">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is Digital Marketing?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Digital Marketing is the promotion of products or brands using different forms of
                                electronic media. Digital marketing is the act of selling products and
                                services through channels such as social media, SEO, email marketing, mobile apps or
                                brand across digital channels on the internet.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="300">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Which online Marketing services are right for my startup?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Most startups will need website design and a customized tracking and analytics
                                integration to lay a rock-solid digital framework. Social media plays the best
                                part in the success of any startup, regardless of size, age, or industry. which
                                services are best for your startup depends on a few things, including your cost,
                                your goals, your service, and your target audience, among others, etc..
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="400">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        what is inbound Marketing?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Inbound marketing is a strategic approach to creating valuable content that aligns
                                with the needs of your target audiences and builds long-term client
                                relationships. It is a marketing strategy based on providing the right content at
                                the right time for your customer.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What is outbound Marketing?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Outbound marketing is where you (the brand) start conversations with your customers
                                to attract them to your brand. For example, radio ads, cold calls,
                                TV ads, paid ads, and direct mail are all examples of outbound.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Would my business help from Digital Marketing services?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Every single brand has to have an online representation of the startup. However,
                                your digital footprint won't have any impact if you don't market it successfully.
                                Every business would benefit from an ongoing, comprehensive digital marketing
                                strategy and the help of an expert marketing team.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="glimpse-of-our-work bg-lightorange space">
    <div class="container">
        <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"> <span></span>Glimpse of Our Work
        </h3>
    </div>
    <!-- Swiper -->
    <div class="swiper-container two aos-init" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-swiper-autoplay="2000">
                <div class="slider-image">
                    <img src="{{ asset('image/glimpse-of-our-work-slide-1.png') }}" alt="slide 1">
                </div>
            </div>
            <div class="swiper-slide" data-swiper-autoplay="2000">
                <div class="slider-image">
                    <img src="{{ asset('image/glimpse-of-our-work-slide-1.png') }}" alt="slide 2">
                </div>
            </div>
            <div class="swiper-slide" data-swiper-autoplay="2000">
                <div class="slider-image">
                    <img src="{{ asset('image/glimpse-of-our-work-slide-1.png') }}" alt="slide 3">
                </div>
            </div>
            <div class="swiper-slide" data-swiper-autoplay="2000">
                <div class="slider-image">
                    <img src="{{ asset('image/glimpse-of-our-work-slide-1.png') }}" alt="slide 4">
                </div>
            </div>
            <div class="swiper-slide" data-swiper-autoplay="2000">
                <div class="slider-image">
                    <img src="{{ asset('image/glimpse-of-our-work-slide-1.png') }}" alt="slide 5">
                </div>
            </div>
            <!-- Add Pagination -->
        </div>
        <div class="swiper-pagination"></div>
        <div class="set-abs screen-container">
            <img alt="" class="img-fluid" src="{{ asset('image/mockup-3.png') }}">
        </div>
    </div>
</div>
<div class="industry-verticals space">
    <div class="container">
        <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"> <span></span>Industry Verticals
        </h3>
    </div>
    <div class="container industry-verticals-box-row">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-box">
                    <img src="{{ asset('image/Healthcare.svg') }}" alt="slide 1">
                    <h3>Healthcare</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-box">
                    <img src="{{ asset('image/Social.svg') }}" alt="slide 1">
                    <h3>Social</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="industry-box">
                    <img src="{{ asset('image/Education.svg') }}" alt="slide 1">
                    <h3>Education</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="industry-box">
                    <img src="{{ asset('image/Music.svg') }}" alt="slide 1">
                    <h3>Music</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="industry-box">
                    <img src="{{ asset('image/Travel.svg') }}" alt="slide 1">
                    <h3>Travel</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="700">
                <div class="industry-box">
                    <img src="{{ asset('image/Shopping.svg') }}" alt="slide 1">
                    <h3>Shopping</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="800">
                <div class="industry-box">
                    <img src="{{ asset('image/Food.svg') }}" alt="slide 1">
                    <h3>Food</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="900">
                <div class="industry-box">
                    <img src="{{ asset('image/Sport.svg') }}" alt="slide 1">
                    <h3>Sport</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="1000">
                <div class="industry-box">
                    <img src="{{ asset('image/Finance.svg') }}" alt="slide 1">
                    <h3>Finance</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="call-to-action aos-init" data-aos="fade-up">
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="600">
        <div class="call-to-action-content">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h2>Hire Digital Marketing Expert</h2>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="hire-digitalmarketer" class="btn btn-primary">Click Here</a>
                </div>
            </div>
        </div>
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
                                <img src="{{ asset('image/hm-ai-in-business-transforming-banner.webp')}}"
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
                                <img src="{{ asset('image/hm-the-impact-of-ai-on-customer-banner1.webp')}}"
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
                                <img src="{{ asset('image/hm-ai-myths-vs-reality-banner.webp')}}" alt="ai" width="350"
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