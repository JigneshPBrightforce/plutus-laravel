@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><span href="#">Company</span></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>About Plutus Technology</h3>
    </div>
</div>
<div class="our-vission-mission">
    <div class="container space aos-init" data-aos="fade-up" data-aos-delay="400">
        <h4>Established in<span class="bold-text mx-1">2014</span>, with a vision to provide top-quality web and mobile app development 
        solution that meets the ever-growing needs of modern customers in the digital landscape. Plutus Technologies is now a leading 
        and fastest-growing IT company that believes in delivering fully functional, scalable, and customized technology solutions with 100%
         customer satisfaction. We are a proficient team of dedicated developers, creative UI/UX designers, and marketing specialists to handle 
         complex web or app design and development projects. We have proven years of experience in the IT industry that help us deliver enterprise-grade 
         solutions with a combination of our industry knowledge, technology expertise, and a passion for excellence. We have designed and developed 
         hundreds of websites and mobile applications for our worldwide clients with successful results in a minimum time and budget. 
        </h4>
        <h4 class="mt-3">
        We are proud to design and build customized software solutions that streamline your business processes, simplify operations,
        and drive significant growth more efficiently. Whether you want to build a fresh new website or custom software or just need
        help adding new features to your existing website or application, we can help. Contact us today to see how we can help convert
        your ideas into powerful technology solutions. 
        </h4>
    </div>
    <div class="container">
        <div class="row aos-init" data-aos="fade-up" data-aos-delay="500">
            <div class="col-lg-8 order-2 order-lg-1">
                <div class="vission">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Our Vision</h3>
                    <p>To provide robust, scalable, and functionality-rich software solutions that make your business grow significantly faster in a digital landscape.  
                    </p>
                    <p class="mt-0">To offer the highest quality web and app development services with 100% satisfaction guaranteed. </p>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2">
                <div class="text-center text-lg-end">
                    <img class="vission-mission" src="{{ asset('image/mission.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row mission-row aos-init" data-aos="fade-up" data-aos-delay="600">
            <div class="col-lg-4 order-1 order-lg-1">
                <div class="text-center text-lg-start">
                    <img class="vission-mission" src="{{ asset('image/Vission.svg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-8 order-2 order-lg-1">
                <div class="mission">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Our Mission</h3>
                    <p>To become a well-established and reputed web and app development company that believes in delivering customized technology solutions to worldwide clients. 
                    </p>
                    <p class="mt-0">To help startups, SMEs, and small businesses grab the opportunity to work with us and take their business to the next level. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="what-makes-different space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>What Makes Us Different?</h3>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <div class="what-makes-different-image">
            <img class="img-fluid" src="{{ asset('image/makes-us-different.svg')}}" alt="">
        </div>
    </div>
</div>
<div class="engagement-models bg-lightorange space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Engagement Models</h3>
    </div>
    <div class="container engagement-models-box-row aos-init" data-aos="fade-up">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="engagement-models-box">
                    <h3>Fixed Price Model</h3>
                    <ul>
                        <li>Defined Scope</li>
                        <li>Fixed Price</li>
                        <li>Timeline for the project is clearly defines</li>
                        <li>Project milestones are defined before project kick-off</li>
                        <li>Periodic assessment of defined milestones</li>
                        <li>Scope, Milestones, Pricing, Technology and Risks are known</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="engagement-models-box">
                    <h3>Time & Material Model</h3>
                    <ul>
                        <li>Fixed hourly rates</li>
                        <li>Shared project manager</li>
                        <li>Hiring and allocating new resources if needed</li>
                        <li>Flexibility of number of resources</li>
                        <li>Direct control over resources</li>
                        <li>24x7 support</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="engagement-models-box">
                    <h3>Full Time Engagement Model</h3>
                    <ul>
                        <li>Fixed hourly rates</li>
                        <li>Flexibility of number of resources based on their experience level</li>
                        <li>Clarity of project cost estimation and pricing</li>
                        <li>24x7 support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="core-value space">
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Our Core Value</h3>
        <p>The Plutus Technologies culture and values are a reflection of our highest aspirations for how we engage with our colleagues, clients, and board members.</p>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <div class="core-value-boxx-main">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="tagline">
                        <h2>Deliver reliable & quality
                            software development services</h2>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="core-value-detail-box">
                        <h3>Optimum Client Satisfaction</h3>
                        <p>We strive hard to provide the best service possible to ensure our clients are 100% satisfied
                            with our quality of work. We put our clients first and take time to understand their business
                            goals and objectives so we can help them achieve the set milestone more efficiently and successfully.
                            In case the client is not happy with the service offered, we will make it right for you without any additional cost.
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Result-Oriented Approach</h3>
                        <p>We understand that every business has its vision to achieve! This is why we highly pay attention to what you want to achieve so that we
                            can create a perfect plan aligned with your business goals. No matter how tight a schedule we are in, we always focus on delivering quality
                            service from start to finish. We hire qualified and experienced software engineers who are passionate and understand the importance of a business.
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Integrity in Everything</h3>
                        <p>We place integrity at the core of everything we do. Being honest and fair in business and daily life entails delivering on our commitments. We are a
                            family of dedicated IT professionals who work hard for a vision, which is to provide top-quality services with exceptional customer satisfaction. 
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Great Place to Work</h3>
                        <p>We have a state-of-the-art infrastructure that makes us feel like we are not working in a company but in a family. There is nothing better than getting
                            inspired by the success stories of the mentors and how they overcame obstacles. We embrace diversity in all forms, including thoughts, cultures, and people.
                            We treat people as humans, not a robot.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inquiryform')
@endsection