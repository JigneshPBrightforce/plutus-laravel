@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fullstack Development</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Fullstack Development</h3>
                    <p class="sub-dec ms-4 mt-4">Welcome to the forefront of full stack development companies in
                        India! As the industry leader, we are committed to providing unrivaled full stack
                        development services to businesses of all sizes. We produce high-quality products adapted to
                        your individual demands thanks to our expertise in full-stack JavaScript development. Trust
                        us to push your company to new heights with our best-in-class services, backed by a team of
                        dedicated specialists. Experience the power of full stack development with us and realize
                        your company's full potential.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('image/fullstack-development-banner-image.svg')}}" class="w-100"
                        alt="full-stack_banner">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-ios-app-development">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Fullstack Development</h3>
        <p class="sub-dec">Plutus Technologies prides delight in providing superior Full Stack Web Development
            Services that are at the cutting edge of the industry. Our experienced team of full-stack developers
            offers comprehensive, end-to-end solutions by smoothly switching between front-end and back-end
            development.
            Our Full Stack Development Services experts have a thorough understanding and mastery of the whole
            spectrum of full stack development, from powerful backend systems to efficient databases and stunning
            frontend interfaces. In many cases, businesses seek to hire our full-stack engineers because they have
            significant experience with server and frontend development, as well as management skills, including
            ideation, conception, and execution.

        </p>
    </div>
</div>
<div class="engagement-models ios-app-development-boxes bg-lightblue-100 space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Our Fullstack Development Services</h3>
    </div>
    <div class="container engagement-models-box-row">
        <div class="row">
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/fullstack-development-box-1.svg')}}" class="" alt="full-stack_service1">
                    <h3 class="mb-0">Front End Development</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Front End Development</h3>
                        <p>The front end development we provide enhances the user experience through engaging and
                            user-friendly interfaces. We ensure that the front-end of your application or website
                            not only appears visually beautiful but also operates effortlessly.

                        </p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/fullstack-development-box-2.svg')}}" class="" alt="full-stack_service2">
                    <h3 class="mb-0">Tech Stack Programming</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Tech Stack Programming</h3>
                        <p>We use a variety of programming languages and frameworks at our company to create strong
                            and scalable apps. We assure quick development and produce high-quality solutions that
                            fit your specific requirements by selecting the most appropriate tech stack for your
                            project.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/fullstack-development-box-3.svg')}}" class="" alt="full-stack_service3">
                    <h3 class="mb-0">Fullstack Mobile Developers</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Fullstack Mobile Developers</h3>
                        <p>A proficient team both in the front-end and the back-end of mobile development, allowing
                            them to deliver complete mobile solutions. All of our developers are experienced in
                            developing native iOS and Android apps as well as cross-platform apps using frameworks
                            such as React Native or Flutter.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/fullstack-development-box-4.svg')}}" class="" alt="full-stack_service4">
                    <h3 class="mb-0">Fullstack Magento Development</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Fullstack Magento Development</h3>
                        <p>With us, you can get everything you need to complete your e-commerce project when it
                            comes to Magento. A deep understanding of Magento's architecture, customization
                            capabilities, and extensions is part of our team of Magento experts</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/fullstack-development-box-5.svg')}}" class="" alt="full-stack_service5">
                    <h3 class="mb-0">Open Source Stack Development</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Open Source Stack Development</h3>
                        <p>As an open-source stack development company, we are experts at creating dynamic and
                            cost-effective solutions using popular open-source technologies. Our projects benefit
                            from open-source technologies' flexibility, security, and scalability, with extensive
                            community support.
                        </p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="700">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/fullstack-development-box-6.svg')}}" class="" alt="full-stack_service6">
                    <h3 class="mb-0">Back End Engineers</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Back End Engineers</h3>
                        <p>With our back-end engineers, you can trust that your applications will be powered by
                            server-side logic that our engineers create. TYour application's back-end will run
                            smoothly thanks to their expertise in developing APIs, integrating databases,
                            implementing security measures, and optimizing performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="benefits-ios space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Benefits of Developing an Fullstack
        </h3>
    </div>
    <div class="aos-init" data-aos="fade-up" data-aos-delay="200">
        <div class="row benefits-ios-row mx-0">
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-1">
                <div class="benefits-ios-box">
                    <h3>
                        Full stack developers have the ability to work on both the front-end and back-end of a
                        website or application, making them highly versatile and adaptable to various projects.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-2">
                <div class="benefits-ios-box">
                    <h3>
                        Hiring a full stack developer can be cost-effective for businesses as they can handle
                        multiple aspects of development, reducing the need for additional specialized resources.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-3">
                <div class="benefits-ios-box">
                    <h3>
                        It can independently handle different aspects of a project, resulting in faster development
                        cycles and quicker time-to-market.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-4">
                <div class="benefits-ios-box">
                    <h3>
                        With knowledge of both client-side and server-side technologies, full stack developers can
                        efficiently troubleshoot and debug issues across the entire application.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-5">
                <div class="benefits-ios-box">
                    <h3>
                        Full stack developers can work independently on projects, reducing the need for external
                        dependencies and streamlining the development process.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-6">
                <div class="benefits-ios-box">
                    <h3>
                        In the tech industry, having full stack development skills can lead to a wide range of
                        career opportunities and increased marketability.</h3>
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
                <img class="w-100" src="{{ asset('image/strength.svg')}}" alt="strength">
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
                    <h2>Let's Discuss Your Fullstack Idea</h2>
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
                        What is a Fullstack developer?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                A Fullstack developer is a programmer who has expertise in both front-end and
                                back-end technologies. They can develop and maintain complete web applications.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="300">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What skills are required to be a Fullstack developer?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Some common skills include HTML, CSS, JavaScript, Python, Ruby on Rails, React,
                                Node.js, database management and server administration.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="400">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What is the importance of database management for Fullstack developers?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Database management is important as it stores and organizes data, which is essential
                                for web applications to function properly. Fullstack developers should have
                                knowledge of databases.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Why should I hire Fullstack developers?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Fullstack developers are well-versed in the entire software development life cycle.
                                This can help you accelerate development, increase productivity, and lower
                                development costs. It also improves application performance and simplifies
                                maintenance and testing. You can customize or modify your application and
                                architecture at any level with Fullstack development. Any issues that arise can
                                also be resolved much more quickly when you have Fullstack developers working on
                                your application. These are just a few of the reasons why many businesses choose
                                Fullstack development services.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        How long does it take to build a Fullstack application?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                This completely depends on the complexity of the requirement. Small, simple apps can
                                be built in 2-6 months, whereas complex projects can take several months.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        What are the hiring engagement options available at Plutus Technology?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                We offer three different types of hiring engagement models. You can hire Plutus
                                developers based on the preferred model that best suits your business needs.
                            </li>
                            <li>Dedicated Developer - Paid on a monthly basis</li>
                            <li>160 Hours a Month. 8 hours a day, 5 days a week</li>
                            <li>Hourly Rate - Hours/Month</li>
                            <li>For time tracking, we use tools such as hubstuff and livetracker</li>
                            <li>Fixed Based - Need content</li>
                            <li>You are welcome to share your requirements with our team. Our team will evaluate
                                your requirements and then provide you with a detailed estimation of your project,
                                including time and cost, as well as a project roadmap.</li>
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
            <img alt="mockup" class="img-fluid" src="{{ asset('image/mockup-3.png') }}">
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
<div class="call-to-action aos-init" data-aos="fade-up">
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="600">
        <div class="call-to-action-content">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h2>Hire Fullstack Developer</h2>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="hire-fullstack-developer" class="btn btn-primary">Click Here</a>
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
                                <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-ai-in-business-transforming-banner.webp"
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
                                <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-the-impact-of-ai-on-customer-banner1.webp"
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
                                <img src="https://dcdh7ea8gkhvt.cloudfront.net/wp-content/uploads/2023/03/hm-ai-myths-vs-reality-banner.webp"
                                    alt="ai" width="350" height="210">
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

<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/swiper.min.js') }}"></script>
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