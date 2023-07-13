@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Software Testing </li>
                    </ol>
                </nav>
                <div class="aos-init" data-aos="fade-up">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Software Testing </h3>
                    <p class="sub-dec ms-4 mt-4">At Plutus Technologies, we understand the pivotal role that quality
                        software plays in shaping exceptional customer experiences. With a professional staff who
                        meticulously evaluates, verifies, and validates every part of your software, leaving no
                        opportunity for faults or bugs.
                        Our unrelenting dedication to improving the customer experience leads us to provide
                        excellent QA tester and software testing services. We thoroughly review every component of
                        your programme to guarantee it meets the highest standards of functionality, reliability,
                        and security, with a keen eye for detail and a rigorous approach.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="page-breadcrumb-img">
                    <img src="{{ asset('image/softwaretesting-development-banner-image.svg') }}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-ios-app-development">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Software Testing</h3>
        <p class="sub-dec">At Plutus Technologies, we stand at the forefront of Software Testing and Quality
            Assurance (QA) services. Dedicated to helping global enterprises achieve exceptional software quality.
            Having reliable, efficient, and expert quality assurance is at the core of our innovative approach.
            Quality tests are easily integrated into all stages of product development. We provide manual and
            automated testing.
            One of the primary benefits of working with Plutustec is the tremendous time savings we offer. Our tests
            are programmed to perform automatically, removing the need for human intervention. This automation not
            only expedites testing but also provides consistent and accurate findings. Our clients can save time and
            capitalize on resources more effectively by minimizing manual labor.
            By creating code once and executing it multiple times, we optimize efficiency and minimize the potential
            for errors. This practice not only saves time but also enhances the overall quality of the software.

        </p>
    </div>
</div>
<div class="engagement-models ios-app-development-boxes bg-lightblue-100 space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Our Software Testing Services</h3>
    </div>
    <div class="container engagement-models-box-row">
        <div class="row">
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="200">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/softwaretesting-development-box-1.svg') }}" class="" alt="">
                    <h3 class="mb-0">Manual Testing</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Manual Testing</h3>
                        <p>Employ a comprehensive range of QA testing methods to ensure the fulfillment of all
                            specified requirements in your product. Diligently verify the functionality,
                            reliability, and adherence to specifications of your product through manual testing.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="300">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/softwaretesting-development-box-2.svg') }}" class="" alt="">
                    <h3 class="mb-0">Automation Testing</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Automation Testing</h3>
                        <p>Deploy efficient automation testing methods to accelerate and structure your testing
                            procedures. Employ efficient automation tools to enhance the efficiency and
                            effectiveness of your testing efforts.
                        </p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="400">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/softwaretesting-development-box-3.svg') }}" class="" alt="">
                    <h3 class="mb-0">Performance Testing</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Performance Testing</h3>
                        <p>Gauge the reliability and robustness of your application by subjecting it to rigorous
                            performance testing. Validate the stability and responsiveness of your application
                            through systematic performance testing.</p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="500">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/softwaretesting-development-box-4.svg') }}" class="" alt="">
                    <h3 class="mb-0">Web Testing</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Web Testing</h3>
                        <p>Conduct comprehensive web testing to ensure seamless operation and user experience.
                            Verify the correct rendering and proper functioning of web pages across various
                            platforms.
                            Test and validate the security features of your web application to ensure protection
                            against potential threats.
                        </p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="600">
                <div class="engagement-models-box bg-lightblue">
                    <img src="{{ asset('image/softwaretesting-development-box-5.svg') }}" class="" alt="">
                    <h3 class="mb-0">Mobile Testing</h3>
                    <div class="engement-overly-div bg-lightblue">
                        <h3 class="mb-0">Mobile Testing</h3>
                        <p>Validate the consistency and compatibility of your mobile app across different devices
                            and platforms. Utilize real devices and emulators to conduct comprehensive testing of
                            your mobile app.
                        </p>
                    </div>
                </div>
            </div>
            <div class="model-box col-md-6 col-lg-4 mb-3 mb-md-0 aos-init" data-aos="fade-up" data-aos-delay="700">
                <div class="engagement-models-box bg-lightorange">
                    <img src="{{ asset('image/softwaretesting-development-box-6.svg') }}" class="" alt="">
                    <h3 class="mb-0">Mobile Automation Testing</h3>
                    <div class="engement-overly-div bg-lightorange">
                        <h3 class="mb-0">Mobile Automation Testing</h3>
                        <p>Harness the power of appropriate testing tools to automate your mobile application
                            testing. Automate the testing process of your mobile application across a wide range of
                            real devices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="benefits-ios space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Benefits of Developing an Software Testing
        </h3>
    </div>
    <div class="aos-init" data-aos="fade-up" data-aos-delay="200">
        <div class="row benefits-ios-row mx-0">
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-1">
                <div class="benefits-ios-box">
                    <h3>
                        A rigorous testing process increases the reliability of software since it allows the
                        identification and correction of potential problems that may lead to a software crash or
                        malfunction by helping to uncover and fix any potential problems.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-2">
                <div class="benefits-ios-box">
                    <h3>
                        Testing helps in identifying security vulnerabilities and weaknesses in the software,
                        enabling developers to implement appropriate security measures and safeguards to protect
                        against potential threats.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-3">
                <div class="benefits-ios-box">
                    <h3>
                        Testing aids in the identification of potential software risks such as security
                        vulnerabilities, performance bottlenecks, and compatibility difficulties, allowing
                        developers to solve them proactively.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-4">
                <div class="benefits-ios-box">
                    <h3>
                        Software testing verifies the compatibility of the software with different hardware,
                        operating systems, browsers, and devices, ensuring that it works seamlessly across various
                        environments.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-5">
                <div class="benefits-ios-box">
                    <h3>
                        Identifying and correcting problems during the testing process is less expensive than
                        dealing with them after the software has been deployed, lowering overall development and
                        maintenance expenses.
                    </h3>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 benefits-ios-box-6">
                <div class="benefits-ios-box">
                    <h3>
                        Testing ensures that the software meets industry-specific compliance and regulatory
                        standards, helping organizations avoid legal and financial penalties.</h3>
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
                    <h2>Let's Discuss Your Software Testing Idea</h2>
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
                        What is Software Testing?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Software Testing is the process of evaluating a software application or system to
                                ensure that it meets specified requirements and functions as expected. It involves
                                executing various test cases, identifying defects or bugs, and verifying that the
                                software performs as intended.

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="300">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Why is Software Testing important?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Software testing is crucial for several reasons:

                                It helps identify defects and bugs early in the development cycle, reducing the cost
                                and effort required to fix them later. It ensures that the software meets user
                                requirements and functions as expected, enhancing user satisfaction. It helps
                                uncover potential risks and vulnerabilities, improving the overall reliability and
                                security of the software.

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="400">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What are the different types of Software Testing?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                There are several types of software testing, including:
                            </li>
                            <li>
                                Functional Testing: Testing the software's functions and features to ensure they
                                work correctly.
                                Performance Testing: Assessing the software's performance under different conditions
                                to measure its speed, scalability, and stability.
                            </li>
                            <li>
                                Security Testing: Identifying vulnerabilities and ensuring the software is secure
                                against unauthorized access or malicious attacks.
                            </li>
                            <li>
                                Usability Testing: Evaluating the software's user interface and user experience to
                                ensure it is intuitive and easy to use.
                            </li>
                            <li>Regression Testing: Re-testing previously tested software after modifications to
                                ensure that changes have not introduced new defects or issues.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What is the difference between manual and automated testing?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Manual Testing: Manual testing involves human testers executing test cases manually,
                                observing the software's behavior, and verifying its outputs. It requires human
                                judgment, is time-consuming, and prone to human error. However, it allows for ad hoc
                                testing and is useful for exploratory testing and usability assessment.
                            </li>
                            <li>
                                Automated Testing: Automated testing involves the use of testing tools and scripts
                                to execute test cases automatically. It saves time and effort, improves accuracy,
                                and enables repeated and consistent testing. It is particularly useful for
                                repetitive tasks, regression testing, and performance testing.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item aos-init" data-aos="fade-up" data-aos-delay="500">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        How can you measure the effectiveness of Software Testing?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                There are several metrics and indicators to measure the effectiveness of software
                                testing, including:
                            </li>
                            <li>Defect detection rate: The number of defects found during testing compared to the
                                total number of defects.</li>
                            <li>Test coverage: The percentage of the software's code or functionalities covered by
                                the test cases.</li>
                            <li>Test execution time: The time taken to execute the complete test suite.</li>
                            <li>Defect turnaround time: The time taken from defect identification to its resolution.
                            </li>
                            <li>Customer satisfaction: Feedback from users or stakeholders about the quality and
                                functionality of the software.</li>
                            <li>Test case effectiveness: The number of defects found by a particular test case or
                                set of test cases</li>
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
                    <h2>Hire Software Testing Developer</h2>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="hire-softwaretester" class="btn btn-primary">Click Here</a>
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