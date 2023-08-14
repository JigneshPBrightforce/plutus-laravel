@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-0 mt-4 mt-lg-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Home</span></li>
                        <li class="breadcrumb-item active" aria-current="page">Hire Software Tester</li>
                    </ol>
                </nav>
                <div class="page-breadcrumb-img d-lg-none my-4">
                    <img src="{{ asset('image/hire-softwaretester.svg')}}" class="w-100" alt="hire-php">
                </div>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Hire Software Tester</h3>
                    <p class="sub-dec ms-4 mt-4">As a leader in the Software Testing and Software QA Testing industry, PlutusTec has worked hard to build a reputation for matching your requirements to the right capabilities in its marketplace.</p>
                    <p class="sub-dec ms-4 mt-4">PlutusTec goes beyond simply offering Software Testers; we also provide the option to Hire Dedicated Software QA Testers that will be solely focused on your projects. These QA experts are skilled at implementing complete testing methodologies, such as functional, performance, and usability testing, that are suited to your specific needs.</p>
                    <p class="sub-dec ms-4 mt-4">We are a company dedicated to software quality assurance (QA) and have specialists who can effortlessly integrate into your processes by working hand-in-hand with your development team, ensuring effective collaboration and timely delivery of high-quality software contracts. This has made us the go-to source for Software Testers and Software QA Testers who excel in their fields.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center d-none d-lg-block">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('image/hire-softwaretester.svg')}}" class="w-100" alt="hire-php">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hire-developer space">
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Hire Software Tester</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="aos-init" data-aos="fade-up">
                    <p class="sub-dec ms-4 mt-4">PlutusTec takes pleasure in providing high-quality software testing solutions that are customized to your professional needs. Dedicated to excellence and backed by considerable industry experience, we are the preferred choice for businesses looking for reliable, cost-effective, and efficient software testing services.</p>
                    <p class="sub-dec ms-4 mt-4">There can be no doubt that software testing is an important part of the software development lifecycle. With the expertise of our specialised testers, you can gain access to a variety of advantages. For starters, our testers have a keen eye for detail, allowing them to detect even the most subtle flaws in your application, resulting in increased reliability and user happiness. Furthermore, outsourcing your testing needs to us saves you significant time and resources because our testers swiftly spot errors, allowing your development team to focus on core responsibilities.</p>
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
                            aria-selected="true">iOS App Development</button>
                        <button class="cursor-hover nav-link tech-service" id="v-pills-second-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-second" type="button" role="tab" aria-controls="v-pills-second"
                            aria-selected="false">PHP Web Development</button>
                        <button class="cursor-hover nav-link tech-service" id="v-pills-third-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-third" type="button" role="tab" aria-controls="v-pills-third"
                            aria-selected="false">WordPress Development</button>
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
                        <img src="{{ asset('image/ios-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php1">
                    </div>
                    <div class="white-box-text">
                        <h5>iOS App Development</h5>
                        <p>As a prominent iOS software development firm based in India, Plutus technologies, we take pride ourselves on delivering bespoke and all-encompassing iOS app development services.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-second" role="tabpanel" aria-labelledby="v-pills-second-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/PHP-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php2">
                    </div>
                    <div class="white-box-text">
                        <h5>PHP Web Development</h5>
                        <p>Plutus Technologies stands as a distinguished entity in the realm of web development, specializing in PHP.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-third" role="tabpanel" aria-labelledby="v-pills-third-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/wordpress-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php3">
                    </div>
                    <div class="white-box-text">
                        <h5>WordPress Development</h5>
                        <p>Plutustec is a premier WordPress Development Company, offering WordPress website design and development services to ensure a responsive, high-quality website that will engage your audience and generate sales or interactions.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/digitalmarketing-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_ph41">
                    </div>
                    <div class="white-box-text">
                        <h5>Digital Marketing</h5>
                        <p>Revolutionize your digital marketing strategy with Plutustec's acute solutions.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="why-hire-developer space">
    <div class="space pt-0">
        <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
            <h3 class="subtitle d-flex align-items-center"><span></span>Why Hire Software Tester from Plutustec ?
            </h3>
        </div>
        <div class="container our-vission-mission">
            <div class="row align-items-center aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="vission">
                        <h3 class="subtitle d-flex align-items-center"><span>1. </span> Post-Release Support</h3>
                        <p>Plutustec's commitment to you does not end with the release of your program. After a release, our testers will provide post-release support, helping you resolve any issues that may arise in the live environment.</p>
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
                        Comprehensive Test Coverage</h3>
                        <p>Plutustec's programme Testers use a comprehensive approach to testing, ensuring that every component of your programme is rigorously analysed. Our testers leave no stone unturned to create a strong and trustworthy solution, from functionality and performance to security and user experience.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mission-row aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="vission">
                        <h3 class="subtitle d-flex align-items-center"><span>3. </span> Quality Assurance</h3>
                        <p>By using highly trained Software Testers, we ensure that your software applications satisfy the highest quality standards. Their meticulous search and correction of errors ensure the perfect user experience, which improves your reputation and builds customer loyalty.</p>
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