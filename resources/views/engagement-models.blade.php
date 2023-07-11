@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Engagement Models</li>
            </ol>
        </nav>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Engagement Models</h3>
    </div>
</div>
<div class="client-slider space">
    <h3 class="d-flex justify-content-center subtitle aos-init" data-aos="fade-up">Our Client</h3>
    <div class="client-logo aos-init" data-aos="fade-up" data-aos-delay="200">
        <div class="client-logo-listing bg-white">
            <div class="brands-marquee">
                <div class="brands-marquee-inner" style="margin-right: 0px; float: left;">
                    <ul class="m-0">
                        <li>
                            <a href="" aria-label="Oracle" class="logo-brand-black-oracle svg_sprite_bg svg-sprite"><img
                                    src="{{ asset('image/eva-play-new-blue.png') }}" alt="eva-play-new-blue"></a>
                        </li>
                        <li>
                            <a href="" aria-label="Cambridge" class="logo-cambridge-v3 svg_sprite_bg svg-sprite"><img
                                    src="{{ asset('image/maingutschen.svg') }}" alt="maingutschen"></a>
                        </li>
                        <li>
                            <a href="" aria-label="Mumayiz"
                                class="abdul-latif-jameel-logo svg_sprite_bg svg-sprite"><img
                                    src="{{ asset('image/mektronic-new.png') }}" alt="mektronic-new"></a>
                        </li>
                        <li>
                            <a href="" aria-label="MTN Logo" class="logo-brand-black-mtn svg_sprite_bg svg-sprite"><img
                                    src="{{ asset('image/Offsight_Logo.svg') }}" alt="Offsight"></a>
                        </li>
                        <li>
                            <a href="" aria-label="MTU Logo" class="logo-brand-black-mtu svg_sprite_bg svg-sprite"><img
                                    src="{{ asset('image/skylon-tower_logo.svg') }}" alt="skylon-tower_logo"></a>
                        </li>
                        <!-- <li>
                                <a href="" aria-label="BCG Logo" class="logo-brand-black-bcg svg_sprite_bg svg-sprite"><img src="{{ asset('image/mektronic-new.png') }}" /></a>
                             </li> -->
                    </ul>
                </div>
            </div>
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
<div class="call-to-action aos-init" data-aos="fade-up">
    <div class="container aos-init" data-aos="fade-up" data-aos-delay="600">
        <div class="call-to-action-content">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h2>Discover Our Complete Range of
                        Business and Technology Solutions.</h2>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="contact-us" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inquiryform')
@endsection