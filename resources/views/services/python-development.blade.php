@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="services">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Python Development</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Python Development</h3>
                    <p class="sub-dec ms-4 mt-4">Plutus Technologies Is known for producing a wide range of
                        Python-based web apps for clients across many industries as a leading Python web development
                        company. We have the ability to create outstanding results whether you require a basic
                        website, a complicated online portal, or a targeted enterprise solution. Throughout the
                        Python software development services, our team collaborates directly with you, offering
                        regular updates and incorporating your suggestions to achieve a final result that surpasses
                        your expectations.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('image/python-development-banner-image.svg') }}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-ios-app-development">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Python Development</h3>
        <p class="sub-dec">Partnering with us means obtaining a competitive advantage in the industry, as we use our
            Python web development knowledge to produce new and modern approaches. We seek to establish long-term
            relationships with our clients by offering comprehensive support and Python App Development Services
            along with maintenance even after the project is completed. We emphasize delivering high-quality
            solutions that surpass client expectations at Plutustec. To achieve efficient project management and
            timely delivery, we use rapid processes and standards of excellence.
        </p>
    </div>
</div>
<div class="engagement-models ios-app-development-boxes bg-lightblue-100 space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Our Python Development Services</h3>
    </div>
    <div class="container engagement-models-box-row">
        <div class="row">
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/python-development-box-1.svg') }}" class="" alt="">
                    <h3 class="mb-0">Custom Python Development</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Custom Python Development</h3>
                        <p>We analyze, design, create, and deploy custom Python applications using an agile and
                            collaborative methodology, assuring smooth integration with current systems and optimal
                            performance.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/python-development-box-2.svg') }}" class="" alt="">
                    <h3 class="mb-0">Enterprise Oriented Solutions</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Enterprise Oriented Solutions</h3>
                        <p>Our holistic enterprise solution portfolio is intended to streamline your business
                            operations, increase efficiency, and drive growth. We provide versatile and reliable
                            options adapted to the requirements of your business, ranging from enterprise resource
                            planning (ERP) systems to customer relationship management (CRM) platforms.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/python-development-box-3.svg') }}" class="" alt="">
                    <h3 class="mb-0">Python Support & Maintenance</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Python Support & Maintenance</h3>
                        <p>Our maintenance staff ensures that your Python applications are up to date, safe, and
                            aligned with the latest industry standards through regular updates, security patches,
                            and code optimisation, letting you to focus on your core business activities.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/python-development-box-4.svg') }}" class="" alt="">
                    <h3 class="mb-0">IT Consulting Services</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">IT Consulting Services</h3>
                        <p>Plutustec consulting services cover a wide range of concerns, from IT strategy
                            development to software selection, installation, and project management, allowing you to
                            make well-informed choices and take advantage of technology as an edge.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/python-development-box-5.svg') }}" class="" alt="">
                    <h3 class="mb-0">Python CMS Development</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Python CMS Development</h3>
                        <p>We construct strong and scalable content management systems designed for your specific
                            needs using our Python CMS development experience. We empower you to quickly manage and
                            publish content, expedite workflows, and boost the user experience by integrating
                            popular Python frameworks such as Django and Flask.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="700">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/python-development-box-6.svg') }}" class="" alt="">
                    <h3 class="mb-0">Migration & Upgradation Services</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Migration & Upgradation Services</h3>
                        <p>Migrations or upgrades are conceptualized and carried out thoroughly, alleviating
                            compatibility issues as well as data migration challenges to avoid downtime. We ensure
                            that your applications remain fully functional and optimized keeping up with new
                            technologies and versions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="benefits-ios space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Benefits of Developing an Python
        </h3>
    </div>
    <div class="aos-init" data-aos="fade-up" data-aos-delay="200">
        <div class="row benefits-ios-row mx-0">
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-1">
                <div class="benefits-ios-box">
                    <h3>
                        We develop feature-rich websites that utilize the latest
                        dynamic web technologies to provide the best possible user
                        experience on mobile and desktop.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-2">
                <div class="benefits-ios-box">
                    <h3>
                        Python/Django framework to build enterprise-level CMS
                        that can be used to control & manage content & layout
                        of the website without advanced technical knowledge.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-3">
                <div class="benefits-ios-box">
                    <h3>
                        Python has become the go-to language for Machine
                        Learning programming.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-4">
                <div class="benefits-ios-box">
                    <h3>
                        Headless applications enable publishing content on multiple
                        channels and device types with SaaS services.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-5">
                <div class="benefits-ios-box">
                    <h3>
                        Our Python developers create solutions for managing and
                        analyzing large datasets to assist your
                        business or organization.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-6">
                <div class="benefits-ios-box">
                    <h3>
                        We provide consulting services to help clients for their
                        specific needs and issues with Python-based websites
                        and applications.</h3>
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
                    <h2>Let's Discuss Your Python Idea</h2>
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
                        What is the use of Python in web development?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Python is an extremely powerful language that can be used to develop a wide range of
                                products going from complex websites to mobile and
                                web applications. Python is used for scripting, backend development, web
                                development, mobile development, IoT, machine learning, fintech, and big data.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="300">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What is the use of Django in Python web development?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Django is an open-source web development framework that provides robustness and
                                simplicity to writing clean and effective code. Django gives you the
                                speed and power of Python with many additional built-in features to help develop
                                mobile and web development and APIs much more quickly. We create
                                a wide range of websites with Python Django.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="400">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Which Python software is the best for web development?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Django
                            </li>
                            <li>CherryPy</li>
                            <li>TurboGears</li>
                            <li>Flask</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What kind of apps can you develop using Python?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Python can be used to develop a wide range of apps likes
                            </li>
                            <li>Audio And Video Apps</li>
                            <li>Game App Development</li>
                            <li>Blockchain Applications</li>
                            <li>Command-Line Apps</li>
                            <li>Business Apps</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Will you help me to maintain my Python web development?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Yes, We make complete process and maintenance for your Python web application, free
                                of cost. we are helping there for you to answer every query you
                                have. We provide free support and maintenance as needed, based on the scale of your
                                application.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Do you have any Python app examples?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                here is the best example of Python app from plutustec 
                            </li>
                            <li>familyassets "https://www.familyassets.com/"</li>
                            <li>qjr-uat.reshyne "https://qjr-uat.reshyne.com/"</li>
                            <li>& some popular angular app are </li>
                            <li>Instagram</li>
                            <li>Pinterest</li>
                            <li>Spotify</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        What if I am dissatisfied with the work of the hired developer and wish to leave?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                We understand that each project requires a unique set of skills, so we will provide
                                you with a free replacement to keep our business relationship going, and if you are
                                not satisfied, we will terminate the contract with a 15 days notice. The termination
                                invoice must detail all unpaid work as well as the remaining work completed until
                                the termination date.
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
                    <h2>Hire Python Developer</h2>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="hire-python-developer" class="btn btn-primary">Click Here</a>
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