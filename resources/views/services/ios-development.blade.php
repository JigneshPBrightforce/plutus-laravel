@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">iOS App Development</li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>iOS App Development</h3>
                    <p class="sub-dec ms-4 mt-4">As a prominent iOS software development firm based in India, Plutus
                        technologies, we take pride ourselves on delivering bespoke and all-encompassing iOS app
                        development services. Bringing our extensive experience and knowledge of iOS app development
                        software to your business will propel it to new heights, delivering results that set you
                        apart from the competition. Our unmatched level of service makes us the best choice for your
                        project.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('image/ios-development-banner-image.svg')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-ios-app-development">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About iOS App Development</h3>
        <p class="sub-dec">As a proficient iOS software development company, our iOS app development services span
            across a wide range of devices, including iPhones and iPads, making us one of the most prominent iOS app
            development companies worldwide. With Apple's constantly evolving iOS platforms, we take pride in our
            unique ability to create apps for all Apple devices, making us one of the most prominent iOS software
            development companies in the world. </p>
    </div>
</div>
<div class="engagement-models ios-app-development-boxes bg-lightblue-100 space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Our iOS App Development Services</h3>
    </div>
    <div class="container engagement-models-box-row">
        <div class="row">
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/ios-app-development-box-1.svg')}}" class="" alt="">
                    <h3 class="mb-0">iOS App Development</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">iOS App Development</h3>
                        <p>It is our pleasure to have an expert team of iOS developers at our iOS app development
                            company who can turn your ideas into exceptional iPhone app development and iPad apps.
                            Using our iOS software development services, your mobile application will be developed
                            to the highest safety and quality standards.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/ios-app-development-box-2.svg')}}" class="" alt="">
                    <h3 class="mb-0">Custom App Development</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Custom App Development</h3>
                        <p>Our team of professionals works closely with you to understand your vision, goals, and
                            user requirements, ensuring that your mobile application has a remarkable impact on your
                            users and checks your list of expectations.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/ios-app-development-box-3.svg')}}" class="" alt="">
                    <h3 class="mb-0">UI/UX Design</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">UI/UX Design</h3>
                        <p>By following the latest Apple UI/UX guidelines for iOS app design, our iOS app
                            development company ensures that your app looks great, is incredibly user-friendly, and
                            delivers an exceptional user experience. The designs we create complement your mobile
                            application's functionality in an elegant and intuitive way.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/ios-app-development-box-4.svg')}}" class="" alt="">
                    <h3 class="mb-0">App Testing</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">App Testing</h3>
                        <p>During the testing process, we ensure that every mobile application we build is
                            functional, integrated, and behaves as intended on actual devices. Your mobile
                            application will run smoothly across a wide range of devices and platforms thanks to our
                            experienced quality assurance team.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/ios-app-development-box-5.svg')}}" class="" alt="">
                    <h3 class="mb-0">Deployment to Apple Store</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Deployment to Apple Store</h3>
                        <p>Your app cannot be deployed to the Apple app store automatically, we follow a process
                            from start to finish. Upon approval, the app is deployed, and you are provided with all
                            certification data. During this process, our team is always available to answer any
                            questions you may have.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="700">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/ios-app-development-box-6.svg')}}" class="" alt="">
                    <h3 class="mb-0">Maintenance & Support</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Maintenance & Support</h3>
                        <p>Our iPhone app developers are always available to provide support and update your app as
                            necessary to guarantee your complete satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="benefits-ios space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Benefits of Developing an iOS Mobile App</h3>
    </div>
    <div class="aos-init" data-aos="fade-up" data-aos-delay="200">
        <div class="row benefits-ios-row mx-0">
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-1">
                <div class="benefits-ios-box">
                    <h3>
                        One of the significant advantages of iOS mobile app development is Apple's high-security
                        standards.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-2">
                <div class="benefits-ios-box">
                    <h3>
                        With a clean and intuitive design, iOS apps are more likely to engage users and keep them
                        coming back for more.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-3">
                <div class="benefits-ios-box">
                    <h3>
                        The iOS development process ensures a high quality of apps, as developers adhere to strict
                        guidelines and follow Apple's design principles.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-4">
                <div class="benefits-ios-box">
                    <h3>
                        In-app purchases are more likely to be made by iOS users because they tend to have higher
                        spending power. Your business can generate more revenue by creating an iOS app.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-5">
                <div class="benefits-ios-box">
                    <h3>
                        With an app in the App Store, your brand becomes more visible. Users are more likely to
                        remember your brand when they need your products or services.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-6">
                <div class="benefits-ios-box">
                    <h3>
                        Innovation is a hallmark of Apple, and it is committed to advancing technology. As well as
                        ARKit, Core ML, and Metal, iOS developers have access to advanced technologies. It is
                        possible to integrate these technologies into iOS apps to provide a more immersive
                        experience for users.
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
                    <h2>Let's Discuss Your iOS App Idea</h2>
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
                        Which tools and software do you use?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                There are many amazing tools for building iOS app development services for all
                                platforms. Here's a list of those tools and software:
                            </li>
                            <li>
                                Xcode
                            </li>
                            <li>
                                Instruments in Xcode
                            </li>
                            <li>
                                Fastlane
                            </li>
                            <li>
                                Bitrise
                            </li>
                            <li>
                                Github/bitbucket
                            </li>
                            <li>
                                RxSwift
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="300">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Which language do you use to develop iOS/iPhone apps?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                We use Objective C and Swift software to develop native iOS apps. Our best language
                                for iOS app development is Swift because of its
                                faster development quality. For cross-platform app development, we use React Native
                                and Flutter for iOS apps.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="400">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Will you help me to upload my iOS app to the App store?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Yes, definitely, we will handle the uploading process of your app on Appstore as
                                it’s a part of our app development service. We handle everything from
                                brainstorming to designing and developing to deploying.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How much time does it take to develop a custom iOS app development?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Generally, iOS app development takes 3 weeks to 8 months. This time depends on
                                various factors, including the complexity of the mobile applications,
                                services, and functionalities that you want to include. However, we can estimate the
                                exact duration of your work after discussing your idea and
                                requirements. To know the exact duration, just fill out our contact us form with
                                your requirements, and one of our sales representatives will get back
                                to you shortly. To know the exact duration, just fill out our contact us form with
                                your requirements, and one of our sales team will get back to you shortly.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="600">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        How do you allocate services for my iOS app development project?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Plutus, being one of the best iOS development companies, allocates services for your
                                project based on your iOS app idea and the hiring model that you
                                select. Therefore, we ensure to allocate the best-suited iOS app developers for your
                                project.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="700">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        What type of iOS apps have you developed before?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Plutus being the best iOS application development company, we have successfully
                                developed almost all types of iOS apps covered by many
                                completed websites. Here are some of the types of iOS app development projects that
                                we have successfully handled:
                            </li>
                            <li>
                                Travel & Tourism
                            </li>
                            <li>
                                Social Networking
                            </li>
                            <li>
                                Health
                            </li>
                            <li>
                                Real Estate
                            </li>
                            <li>
                                Photo & Video
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
                    <h2>Hire iOS App Developer</h2>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="hire-ios-app-developer" class="btn btn-primary">Click Here</a>
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