@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-0 mt-4 mt-lg-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hire Fullstack Developer</li>
                    </ol>
                </nav>
                <div class="page-breadcrumb-img d-lg-none my-4">
                    <img src="{{ asset('image/hire-fullstack-developer.svg')}}" class="w-100" alt="hire-php">
                </div>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Hire Fullstack Developer</h3>
                    <p class="sub-dec ms-4 mt-4">Plutus Technologies has assembled an exceptional team of highly experienced and motivated fullstack programmers. These people have an instinctive capacity to bridge the gap between front-end and back-end development, harmoniously integrating technology and aesthetics to produce appealing online apps. You leave your project to a team driven by passion, innovation, and a solid dedication to quality when you hire our dedicated full stack developers.</p>
                    <p class="sub-dec ms-4 mt-4">The team at Plutus Technologies understands the value of employee experience and dedication to your project and that an employee's passion will make a difference in its success. We promise that committing your web development needs to our team of skilled full-stack engineers will result in an efficient conclusion of your project, guaranteeing your vision becomes a reality.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center d-none d-lg-block">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('image/hire-fullstack-developer.svg')}}" class="w-100" alt="hire-php">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hire-developer space">
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Hire Fullstack Developer</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="aos-init" data-aos="fade-up">
                    <p class="sub-dec ms-4 mt-4">To gain a competitive advantage in the market, companies are increasingly engaging and recruiting full-stack engineers who have a strong background in both server and front-end development expertise.  At Plutus Technologies the developers specialize in everything from the concept to the finished product.</p>
                    <p class="sub-dec ms-4 mt-4">Working with Plutus Technologies ensures more than simply advanced technical knowledge when you hire fullstack programmers. Our full-stack developers demonstrate unrelenting dedication, a never-ending thirst for education, and a profound desire to solve problems. Their dedication to excellence and ability to manage complicated challenges make them invaluable assets to your corporation.</p>
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
                        <button class="nav-link tech-service active " id="v-pills-first-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-first" type="button" role="tab" aria-controls="v-pills-first"
                            aria-selected="true">AngularJS Development</button>
                        <button class="nav-link tech-service" id="v-pills-second-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-second" type="button" role="tab" aria-controls="v-pills-second"
                            aria-selected="false">Node.js Development</button>
                        <button class="nav-link tech-service" id="v-pills-third-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-third" type="button" role="tab" aria-controls="v-pills-third"
                            aria-selected="false">Python Development</button>
                        <button class="nav-link tech-service" id="v-pills-four-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-four" type="button" role="tab" aria-controls="v-pills-four"
                            aria-selected="false">UI/UX Design</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 col-md-7 white-box">
            <div class="tab-content " id="v-pills-tabContent">
                <div class="tab-pane fade show active " id="v-pills-first" role="tabpanel"
                    aria-labelledby="v-pills-first-tab" tabindex="0">
                    <div class="text-center">
                        <img src="{{ asset('image/angularjs-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php1">
                    </div>
                    <div class="white-box-text">
                        <h5>AngularJS Development</h5>
                        <p>Elevate your digital presence with cutting-edge AngularJS app development services from a renowned AngularJS web development company.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-second" role="tabpanel" aria-labelledby="v-pills-second-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/nodejs-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php2">
                    </div>
                    <div class="white-box-text">
                        <h5>Node.js Development</h5>
                        <p>Plutus Technologies is the premier Node.js development company in India and the United States, offering Node.js web development services.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-third" role="tabpanel" aria-labelledby="v-pills-third-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/python-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php3">
                    </div>
                    <div class="white-box-text">
                        <h5>Python Development</h5>
                        <p>Plutus Technologies Is known for producing a wide range of Python-based web apps for clients across many industries as a leading Python web development company.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/uiux-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_ph41">
                    </div>
                    <div class="white-box-text">
                        <h5>UI/UX Design</h5>
                        <p>Plutus Technologies attempts to understand the core of your brand and transform it into an interface that resonates with your target audience through an iterative and collaborative process.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="why-hire-developer space">
    <div class="space pt-0">
        <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
            <h3 class="subtitle d-flex align-items-center"><span></span>Why Hire Fullstack Developers from Plutustec ?
            </h3>
        </div>
        <div class="container our-vission-mission">
            <div class="row align-items-center aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="vission">
                        <h3 class="subtitle d-flex align-items-start"><span>1. </span>Future-Proofing</h3>
                        <p>Despite the constant technology change, full stack developers are well suited to adapting and mastering new tools and frameworks. Your project will remain relevant and future-proof as their expertise keeps them on top of industry developments.</p>
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
                        <h3 class="subtitle d-flex align-items-start  justify-content-lg-end"><span>2. </span>
                        Agile Development</h3>
                        <p>We have Full Stack Developers familiar with Agile methodologies, but they can easily adapt to changing project requirements. Shorter development cycles and faster delivery of high-quality solutions result from their ability to switch between different technologies, libraries, and frameworks easily.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mission-row aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="vission">
                        <h3 class="subtitle d-flex align-items-start"><span>3. </span>Efficient Project Management</h3>
                        <p>The process of managing projects is simplified by hiring Full Stack Developers. Whether it's designing user interfaces, developing complicated server-side functionality, or managing the complete development lifecycle, they can handle it all. Having a thorough understanding of how the development process works enables them to successfully coordinate the development process and decreases communication gaps within the team.</p>
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