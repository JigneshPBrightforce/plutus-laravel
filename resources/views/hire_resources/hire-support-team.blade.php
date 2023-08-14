@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-0 mt-4 mt-lg-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Home</span></li>
                        <li class="breadcrumb-item active" aria-current="page">Hire Support Team</li>
                    </ol>
                </nav>
                <div class="page-breadcrumb-img d-lg-none my-4">
                    <img src="{{ asset('image/hire-support-team.svg')}}" class="w-100" alt="hire-php">
                </div>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Hire Support Team</h3>
                    <p class="sub-dec ms-4 mt-4">We are a trusted customer support outsourcing company committed to offering on-demand
                        professional customer support specialists to help deliver your products and services to your customers more efficiently
                        and professionally. Hire our customer support team to improve your customer service, enhance the experience, and generate
                        more leads to capitalize on the growth.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center d-none d-lg-block">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('image/hire-support-team.svg')}}" class="w-100" alt="hire-php">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hire space">
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Hire Support Team</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="aos-init" data-aos="fade-up">
                    <p class="sub-dec ms-4 mt-4">Plutus Technologies is a professional customer support outsourcing company offering round-the-clock
                        support services to clients worldwide. To make your business stand out from the competition and create a great impression in customers’ minds,
                        we tap into this experience. We understand that you need to focus on specific offerings in a way that not only makes sense to your customers but
                        also your business to take it to the next level. With this in mind, we aim to provide the best and most affordable dedicated customer support team
                        to ensure no customers are left unsatisfied. Our outsourced customer support services help you be proactive and anticipate your customers' needs so
                        that you can deliver your offerings the way you want. 
                    </p>
                    <p class="sub-dec ms-4 mt-4">At Plutus Technologies, we are a proficient team of dedicated customer support specialists and technical support professionals with
                        extensive knowledge and experience in working on different tools and technologies and dealing with small and large-sized business customers & clients quickly
                        and proactively. If you are a business looking to hire a dedicated support team that adds value to your business, Plutus Technologies is the right choice for you.
                        Set up a quick interview with us to hire support team professionals today!
                    </p>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="industry-verticals technology-expertise">
    <div class="container">
        <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"> <span></span>Technology
            Expertise
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
<div class="industry-verticals space">
    <div class="container">
        <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"> <span></span>Industry Verticals
        </h3>
    </div>
    <div class="container industry-verticals-box-row">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-box">
                    <img src="{{ asset('image/Healthcare.svg')}}" alt="slide 1">
                    <h3>Healthcare</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-box">
                    <img src="{{ asset('image/Social.svg')}}" alt="slide 1">
                    <h3>Social</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="industry-box">
                    <img src="{{ asset('image/Education.svg')}}" alt="slide 1">
                    <h3>Education</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="industry-box">
                    <img src="{{ asset('image/Music.svg')}}" alt="slide 1">
                    <h3>Music</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="industry-box">
                    <img src="{{ asset('image/Travel.svg')}}" alt="slide 1">
                    <h3>Travel</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="700">
                <div class="industry-box">
                    <img src="{{ asset('image/Shopping.svg')}}" alt="slide 1">
                    <h3>Shopping</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="800">
                <div class="industry-box">
                    <img src="{{ asset('image/Food.svg')}}" alt="slide 1">
                    <h3>Food</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="900">
                <div class="industry-box">
                    <img src="{{ asset('image/Sport.svg')}}" alt="slide 1">
                    <h3>Sport</h3>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 aos-init" data-aos="fade-up" data-aos-delay="1000">
                <div class="industry-box">
                    <img src="{{ asset('image/Finance.svg')}}" alt="slide 1">
                    <h3>Finance</h3>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
    <div class="container">
        <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"> <span></span>Related Services
        </h3>
    </div>
    <div class="row orange-box-row">
        <div class="col-12 col-md-5 orange-box">
            <div class=" d-block  position-relative">
                <div class="select-catagory d-lg-block align-items-start d-flex">
                    <div class="nav flex-column nav-pills align-items-start" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="cursor-hover nav-link tech-service active " id="v-pills-first-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-first" type="button" role="tab" aria-controls="v-pills-first"
                            aria-selected="true">Android App Development</button>
                        <button class="cursor-hover nav-link tech-service" id="v-pills-second-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-second" type="button" role="tab" aria-controls="v-pills-second"
                            aria-selected="false">Python Development</button>
                        <button class="cursor-hover nav-link tech-service" id="v-pills-third-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-third" type="button" role="tab" aria-controls="v-pills-third"
                            aria-selected="false">Drupal Development</button>
                        <button class="cursor-hover nav-link tech-service" id="v-pills-four-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-four" type="button" role="tab" aria-controls="v-pills-four"
                            aria-selected="false">Digital Marketing</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 col-md-7 white-box">
            <div class="tab-content " id="v-pills-tabContent">
                <div class="tab-pane fade show active " id="v-pills-first" role="tabpanel"
                    aria-labelledby="v-pills-first-tab" tabindex="0">
                    <div class="text-center">
                        <img src="{{ asset('image/android-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php1">
                    </div>
                    <div class="white-box-text">
                        <h5>Android App Development</h5>
                        <p>Reliable partners for your Android/IOS App Development, with focused on custom solutions, that are designed to meet unique goals and requirements.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-second" role="tabpanel" aria-labelledby="v-pills-second-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/python-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php2">
                    </div>
                    <div class="white-box-text">
                        <h5>Python Development</h5>
                        <p>Plutus Technologies Is known for producing a wide range of Python-based web apps for clients across many industries as a leading Python web development company.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-third" role="tabpanel" aria-labelledby="v-pills-third-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/drupal-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php3">
                    </div>
                    <div class="white-box-text">
                        <h5>Drupal Development</h5>
                        <p>Providing outstanding Drupal development services that meet the unique requirements and needs of your company.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/digitalmarketing-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_ph41">
                    </div>
                    <div class="white-box-text">
                        <h5>Digital Marketing</h5>
                        <p>Revolutionize your digital marketing strategy with Plutustec's acute solutions. Boost your online presence, engage your target audience, and drive conversions through expertly crafted campaigns.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="why-hire-developer space">
    <div class="space pt-0">
        <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
            <h3 class="subtitle d-flex align-items-center"><span></span>Why Hire Support Team from Plutustec ?
            </h3>
        <p>We are a well-established and reputed firm that believes in quality services with 100% customer satisfaction. Our support team specialists
            are friendly, skilled, and experienced to deliver top-class customer support services that improve the overall customer experience.
            We have been providing personalized support services as an extension of your company, our technical expert linguists work seamlessly
            with your customers to ensure you won't miss another important call. Here are some reasons why should you hire a support team from us;

        </p>
        </div>
        <div class="container our-vission-mission">
            <div class="row align-items-center aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="vission">
                        <h3 class="subtitle d-flex align-items-center"><span>1. </span>Extensive Knowledge</h3>
                        <p>The customer experience is the most important aspect of our customer support system, which enables businesses to make data-driven decisions that lead to success by reducing friction at every stage of the customer journey. Our customer support services have the requisites to ensure a seamless customer experience across multiple channels, such as phone calls, emails, chats, or even social media platforms. Our support team can handle all your customers from different platforms and mediums.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="text-center text-lg-end">
                        <img src="{{ asset('image/why-hire-php-1.svg')}}" class="w-100" alt="whyphp">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mission-row aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="col-lg-4 order-1 order-lg-1">
                    <div class="text-center text-lg-start">
                        <img src="{{ asset('image/why-hire-php-2.svg')}}" class="w-100" alt="whyphp">
                    </div>
                </div>
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="mission">
                        <h3 class="subtitle d-flex align-items-center  justify-content-lg-end"><span>2. </span>
                        Prompt Response</h3>
                        <p>As a leading outsourcing customer support company, we at Plutus Technologies understand the value of time, so we strive to respond within a minute or even seconds to ensure you get your answer without having to wait in a long queue. We proactively reply to your calls, emails, and messages and offer the best support services possible to make your business stand out. If you are a business searching for fast and reliable customer support services or individual support specialists, consider hiring a support team from Plutus Technologies.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mission-row aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="vission">
                        <h3 class="subtitle d-flex align-items-center"><span>3. </span>Best & Affordable Pricing</h3>
                        <p>Creating value-add interactions with your customers is integral to your business with them. We at Plutus Technologies assist you in bringing a difference to your lives. We focus on providing the best and most affordable customer support team to take care of your products & services and customers. We are a dedicated support team responsible for providing both technical and non-technical support services your business needs to upscale in the market. Hire a support team from us today & let us manage your customers more professionally!
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="text-center text-lg-end">
                        <img src="{{ asset('image/why-hire-php-3.svg')}}" class="w-100" alt="whyphp">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('hire_developers')
@include('inquiryform')
@endsection