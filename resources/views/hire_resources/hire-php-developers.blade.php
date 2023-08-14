@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-0 mt-4 mt-lg-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><span>Home</span></li> 
                        <li class="breadcrumb-item active" aria-current="page">Hire PHP Developer</li>
                    </ol>
                </nav>
                <div class="page-breadcrumb-img d-lg-none my-4">
                    <img src="{{ asset('image/Hire-php.svg')}}" class="w-100" alt="hire-php">
                </div>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Hire PHP Developer</h3>
                    <p class="sub-dec ms-4 mt-4">It's no secret that the industry is evolving at breakneck speed and
                        staying ahead of the competitors requires expertise and innovation to stay competitive. PHP
                        developers have the knowledge and proficiency required to make your vision a reality, and we
                        can help you with that. The benefits you gain from working with us as a client are that you
                        can access a formidable pool of talent that is capable of propelling your business to
                        unprecedented levels of success. Trust in our expertise and watch your digital dreams
                        flourish.</p>
                </div>
            </div>            
            <div class="col-lg-6 text-center d-none d-lg-block">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('image/Hire-php.svg')}}" class="w-100" alt="hire-php">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hire-developer space">
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Hire PHP Developer</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="aos-init" data-aos="fade-up">
                    <p class="sub-dec ms-4 mt-4">The time for hesitation is over. A path to success lies before you,
                        paved with the expertise of our PHP developers, who will guide you along the way. As you
                        take advantage of this opportunity to hire these incredible individuals, you will embark on
                        a transformative journey that will redefine your digital presence in a way you never thought
                        possible. Keeping in mind the ever-evolving technological landscape, we will navigate the
                        intricacies of this ever-evolving landscape as a collective team, striving to achieve
                        excellence in everything we attempt.
                    </p>
                    <p class="sub-dec ms-4 mt-4">Profit from our seasoned PHP engineers' considerable abilities,
                        access to libraries and extensions, and industry standards. We strive to give the finest
                        solutions for your individual project needs, from undisputed security precautions to access
                        to a large choice of PHP libraries and extensions. Choose from a variety of flexible
                        scheduling, engagement, and outsourcing options to realise the full potential of PHP
                        development with Plutus Technologies.
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
                            aria-selected="true">Node.js Development</button>
                        <button class="cursor-hover nav-link tech-service" id="v-pills-second-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-second" type="button" role="tab" aria-controls="v-pills-second"
                            aria-selected="false">AngularJS Development</button>
                        <button class="cursor-hover nav-link tech-service" id="v-pills-third-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-third" type="button" role="tab" aria-controls="v-pills-third"
                            aria-selected="false">ReactJS Development</button>
                        <button class="cursor-hover nav-link tech-service" id="v-pills-four-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-four" type="button" role="tab" aria-controls="v-pills-four"
                            aria-selected="false">Fullstack Development</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 col-md-7 white-box">
            <div class="tab-content " id="v-pills-tabContent">
                <div class="tab-pane fade show active " id="v-pills-first" role="tabpanel"
                    aria-labelledby="v-pills-first-tab" tabindex="0">
                    <div class="text-center">
                        <img src="{{ asset('image/nodejs-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire">
                    </div>
                    <div class="white-box-text">
                        <h5>Node.js Development</h5>
                        <p>Plutus Technologies is the premier Node.js development company in India and the United States, offering Node.js web development services.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-second" role="tabpanel" aria-labelledby="v-pills-second-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/angularjs-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire">
                    </div>
                    <div class="white-box-text">
                        <h5>AngularJS Development</h5>
                        <p>Elevate your digital presence with cutting-edge AngularJS app development services from a renowned AngularJS web development company.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-third" role="tabpanel" aria-labelledby="v-pills-third-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/reactjs-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_php3">
                    </div>
                    <div class="white-box-text">
                        <h5>ReactJS Development</h5>
                        <p>Plutus Technologies, an experienced ReactJS Development Company in India, specializes in providing outstanding ReactJS Development Services that are highly scalable and versatile.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab"
                    tabindex="1">
                    <div class="text-center">
                        <img src="{{ asset('image/fullstack-development-banner-image.svg')}}" width="271" height="200" class="" alt="hire_ph41">
                    </div>
                    <div class="white-box-text">
                        <h5>Fullstack Development</h5>
                        <p>Welcome to the forefront of full stack development companies in India! As the industry leader, we are committed to providing unrivaled full stack development services to businesses of all sizes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why-hire-developer space">
    <div class="space pt-0">
        <div class="container aos-init" data-aos="fade-up" data-aos-delay="400">
            <h3 class="subtitle d-flex align-items-center"><span></span>Why Hire PHP Developers from Plutustec ?
            </h3>
        </div>
        <div class="container our-vission-mission">
            <div class="row align-items-center aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="vission">
                        <h3 class="subtitle d-flex align-items-start"><span>1. </span> Quality Assurance</h3>
                        <p>Plutustec places a premium on providing high-quality PHP solutions to our clients. Our
                            PHP developers adhere to coding standards and industry best practises to ensure that
                            your application is durable, secure, and bug-free. We conduct rigorous testing at each
                            stage of development, including functional testing, performance testing, and security
                            testing, to guarantee an effective ui.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="text-center text-lg-end">
                        <img src="{{ asset('image/softwaretesting-development-box-1.svg')}}" class="w-100" alt="whyphp">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mission-row aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="col-lg-4 order-1 order-lg-1">
                    <div class="text-center text-lg-start">
                        <img src="{{ asset('image/Agile_Development_Methodology.svg')}}" class="w-100" alt="whyphp">
                    </div>
                </div>
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="mission">
                        <h3 class="subtitle d-flex align-items-start justify-content-lg-end"><span>2. </span>
                            Agile Development Methodology</h3>
                        <p>We employ PHP developers who are well-versed in Agile principles, allowing them to adapt
                            quickly to changing requirements, incorporate feedback, and deliver incremental updates.
                            As a result of our adoption of an agile approach, we are able to ensure transparency,
                            flexibility, and improved project outcomes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mission-row aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="vission">
                        <h3 class="subtitle d-flex align-items-start"><span>3. </span> Advanced Framework Knowledge
                        </h3>
                        <p>We have many years of experience working with popular PHP frameworks, including Laravel,
                            Symfony, CodeIgniter, and CakePHP. In choosing Plutustec as your PHP developer, you get
                            access to experts who can provide you with assistance in maximizing the performance
                            potential of PHP frameworks for your project.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="text-center text-lg-end">
                        <img src="{{ asset('image/why-hire-php-2.svg')}}" class="w-100" alt="whyphp">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('hire_developers')
@include('inquiryform')
@endsection