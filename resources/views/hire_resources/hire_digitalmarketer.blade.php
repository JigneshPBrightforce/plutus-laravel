@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-0 mt-4 mt-lg-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Home</span></li>
                        <li class="breadcrumb-item active" aria-current="page">Hire Digital Marketer</li>
                    </ol>
                </nav>
                <div class="page-breadcrumb-img d-lg-none my-4">
                    <img src="{{ asset('image/hire-digitalmarketer.svg')}}" class="w-100" alt="hire-php">
                </div>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Hire Digital Marketer</h3>
                    <p class="sub-dec ms-4 mt-4">Hire certified digital marketers to improve online visibility, website rankings, and brand awareness
                        in the digital landscape. Our digital marketing specialists offer tech-enabled marketing solutions that provide successful outcomes. </p>
                </div>
            </div>
            <div class="col-lg-6 text-center d-none d-lg-block">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('image/hire-digitalmarketer.svg')}}" class="w-100" alt="hire-php">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hire-developer space">
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Hire Digital Marketer</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="aos-init" data-aos="fade-up">
                    <p class="sub-dec ms-4 mt-4">DPlutus Technologies is a leading digital marketing agency that offers a comprehensive range of digital marketing services,
                        including SEO, SEM, PCC, Google Ads campaign management, and content writing & marketing. We are a team of skilled and certified digital marketers to
                        ensure you get the best digital marketing & social media marketing services that add value to your business. We offer fast, reliable, and cost-effective
                        digital marketing solutions using the right, more efficient digital marketing strategies in the first place. When you hire digital marketing experts
                        from Plutus Technologies, you can be assured that you will get the best return on your marketing investments.
                    </p>
                    <p class="sub-dec ms-4 mt-4">Our digital marketers will help you in tracking & analyzing even the toughest marketing things using the right marketing tools.
                        With decades of experience in digital marketing, we know what it takes to make your business succeed in the digital space. We create the best marketing plans,
                        SEO strategies, and efficient ad campaigns based on in-depth market research, target audience, and core products & services to ensure everything goes right
                        and drives profitable results. If you want to scale your business in the digital landscape, hire our digital marketing experts today!
                    </p>
                </div>
            </div>
            <!-- <div class="col-lg-5 text-center">
                
            </div> -->
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
                            aria-selected="true">Software Testing</button>
                        <button class="cursor-hover nav-link tech-service" id="v-pills-second-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-second" type="button" role="tab" aria-controls="v-pills-second"
                            aria-selected="false">UI/UX Design</button>
                        <button class="cursor-hover nav-link tech-service" id="v-pills-third-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-third" type="button" role="tab" aria-controls="v-pills-third"
                            aria-selected="false">WordPress Development</button>
                        <button class="cursor-hover nav-link tech-service" id="v-pills-four-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-four" type="button" role="tab" aria-controls="v-pills-four"
                            aria-selected="false">Flutter App Development</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 col-md-7 white-box">
            <div class="tab-content " id="v-pills-tabContent">
                <div class="tab-pane fade show active " id="v-pills-first" role="tabpanel"
                    aria-labelledby="v-pills-first-tab" tabindex="0">
                    <div class="text-center">
                        <img src="{{ asset('image/softwaretesting-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php1">
                    </div>
                    <div class="white-box-text">
                        <h5>Software Testing</h5>
                        <p>At Plutus Technologies, we understand the pivotal role that quality software plays in shaping exceptional customer experiences.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-second" role="tabpanel" aria-labelledby="v-pills-second-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/uiux-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php2">
                    </div>
                    <div class="white-box-text">
                        <h5>UI/UX Design</h5>
                        <p>Plutus Technologies attempts to understand the core of your brand and transform it into an interface that resonates with your target audience through an iterative and collaborative process.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-third" role="tabpanel" aria-labelledby="v-pills-third-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/wordpress-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php3">
                    </div>
                    <div class="white-box-text">
                        <h5>WordPress Development</h5>
                        <p>Plutustec is a premier WordPress Development Company, offering WordPress website design and development services to ensure a responsive, high-quality website that will engage your audience and generate sales or interactions. </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/flutter-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_ph41">
                    </div>
                    <div class="white-box-text">
                        <h5>Flutter App Development</h5>
                        <p>As an industry-leading Flutter App Development Company in India, we specialize in rendering custom Flutter app development services designed to satisfy our clients' distinct business objectives.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="why-hire-developer space">
    <div class="space pt-0">
        <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
            <h3 class="subtitle d-flex align-items-center"><span></span>Why Hire Digital Marketer from Plutustec ?
            </h3>
            <p>We are a reputed digital marketing company committed to providing top-rated digital marketing services your business needs to
                thrive in the competitive marketplace. The thing that sets us apart from others in the market is that we believe in delivering fully
                customized digital marketing solutions with successful outcomes rather than just providing our services. You can grow and scale up your
                business online by hiring a digital marketer from Plutus Technologies.
            </p>
        </div>
        <div class="container our-vission-mission">
            <div class="row align-items-center aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="vission">
                        <h3 class="subtitle d-flex align-items-center"><span>1. </span> Diverse Expertise</h3>
                        <p>We have extensive experience, knowledge, and expertise in different fields and technologies to ensure your business
                            is in good hands. We are not just limited to digital marketing services but also offer customized solutions tailored to
                            your unique business needs. Whether you are planning to scale your business to the next level, improve brand awareness, or
                            just want to increase website rankings, we can help. 
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
                        Extensive Knowledge</h3>
                        <p>You need marketers who understand online marketing basics and know how to make profitable marketing decisions.
                            Our digital marketers use the latest marketing tools, tactics, and proven strategies to run successful campaigns
                            for businesses across a variety of industries. Hire our digital marketing experts today to take your business to the next level.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mission-row aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="vission">
                        <h3 class="subtitle d-flex align-items-center"><span>3. </span> Custom Solutions</h3>
                        <p>Our team of experts understands that digital marketing is a vast area of expertise encompassing multiple subspecialties.
                            The digital marketing industry has countless aspects, so our team consists of digital marketing experts who can handle each
                            one of them. Since started, we have been running successful and profitable marketing campaigns for many years. If you want to
                            grow your business online in the digital world, hire a digital marketer today from us.
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