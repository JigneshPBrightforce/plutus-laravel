@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Company</a></li>
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
        <h4>Since the inception in <span class="bold-text">2014</span>, Plutus Technologies has been committed to
            deliver services those surpass excellence and
            tailored to cater the needs of an ever-evolving digital landscape. The key compelling benefits due to
            which our customers
            enjoy outsourcing to us are our technical expertise, competitive pricing, faster and accurate delivery
            models,
            state-of-the-art project management practices, superior quality management, optimized processes and most
            importantly
            our development methods.

        </h4>
        <h4>
            With <span class="bold-text">70+</span> team of in house designer & developers, we have successfully
            completed <span class="bold-text">150+</span> websites and <span class="bold-text">100+</span> mobile
            applications. We take pride in building software development solutions those drive growth for our
            clients’ business.
        </h4>
    </div>
    <div class="container">
        <div class="row aos-init" data-aos="fade-up" data-aos-delay="500">
            <div class="col-lg-8 order-2 order-lg-1">
                <div class="vission">
                    <h3 class="subtitle d-flex align-items-center"> <span></span>Our Vision</h3>
                    <p>Provide scalable and cost effective techno-functional solutions helping each
                        customer and their business to grow significantly at their satisfaction. We
                        believe if our customers grow, our growth is definite.
                    </p>
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
                    <p>Our mission is to evolve into a leading IT company with a perfect
                        blend of technology, practicality and aesthetics to provide the competitive
                        cutting edge solutions to our valuable clients.
                    </p>
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
                        <p>It’s in our DNA. Our clients are the partners behind the success we have tasted over the
                            decades. This is the reason we keep client satisfaction at the center of our ecosystem.
                            We are not shy of collaboration to sharpen our insights for perfect execution of our
                            offerings. The praise from the clients is music to our ears and we’d crave for that.
                            It’s a hunger in us that never fades.
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Result-Oriented Approach</h3>
                        <p>The roots of our success are connected to our vision and execution of it. Starting from
                            the recruitment to the quality deliverables, we keep our values intact. We hire
                            passionate humans who have that fire burning in them. People who really want to work
                            with us and understand the importance of client expectations to deliver quality results.
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Integrity in Everything</h3>
                        <p>Integrity is our core and is at the center of everything we do. For us, it is as good as
                            following the law, maybe more than that. It is about delivering on our commitments,
                            honesty and fairness in business and day-to-day living. We are a family that believes in
                            team work with one Mantra, that is to die with memories, not dreams. Memories with our
                            peeps, memories with our clients.
                        </p>
                    </div>
                    <div class="core-value-detail-box">
                        <h3>Great Place to Work</h3>
                        <p>There are a few things that make IndiaNIC a family. We love our peeps. IndiaNIC is just
                            not about its promises, global recognitions or testimonials. With utter respect, we
                            embrace the diversity of thought, cultures, and of people. Nothing feels better than
                            getting inspired by the mentors and their success stories. Yes, IndiaNIC is
                            compassionate for its priceless asses, the employees. Humans work here, not robots!!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inquiryform')
@endsection