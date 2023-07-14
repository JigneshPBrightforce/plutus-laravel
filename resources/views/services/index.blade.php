@extends('layouts.app')

@section('content')
<div class="page-breadcrumb space bg-lightorange top-space">
    <div class="container aos-init" data-aos="fade-up">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
    <div class="container aos-init" data-aos="fade-up">
        <h3 class="subtitle d-flex align-items-center"> <span></span>Services</h3>
    </div>
</div>
<div class="client-slider space">
    <h3 class="d-flex justify-content-center subtitle aos-init" data-aos="fade-up">Our Client</h3>
    <div class="client-logo aos-init" data-aos="fade-up" data-aos-delay="200">
        <div class="client-logo-listing">
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
                                <a href="" aria-label="BCG Logo" class="logo-brand-black-bcg svg_sprite_bg svg-sprite"><img src="{{ asset('image/mektronic-new.png') }}"
                                    alt=""></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="expertise bg-lightblue space">
    <div class="container">
        <h3 class="subtitle d-flex align-items-center aos-init" data-aos="fade-up"> <span></span>Our Services</h3>
        <div class="heading-t aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="light-brown features" id="features">
                <div class="row d-flex flex-wrap v-tabs">
                    <div class="left-vertical-menu-tab v-tab-head d-none d-md-block">
                        <a class="v-tab-link active" data-target="#coreFeatures-tab"><span></span>Mobile app</a>
                        <a class="v-tab-link" data-target="#designingBuildingTools-tab"><span></span>Web
                            application</a>
                        <a class="v-tab-link" data-target="#hostingUtilitiesSettings-tab"><span></span>CMS &
                            e-commerce</a>
                        <a class="v-tab-link" data-target="#marketing-tab"><span></span>Testing</a>
                        <a class="v-tab-link" data-target="#email-tab"><span></span>UI/UX</a>
                        <a class="v-tab-link" data-target="#ecommerce-tab"><span></span>Digital marketing</a>
                    </div>
                    <div class="col v-tab-pane">
                        <a class="v-tab-head v-tab-link visible-xs active" data-target="#coreFeatures-tab">Mobile
                            app</a>
                        <div id="coreFeatures-tab" class="collapse fade in">
                            <div class="row">
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/apple.svg') }}" alt="">
                                        <h3>iOS</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/android.svg') }}" alt="">
                                        <h3>Android</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/Ionic-logo.svg') }}" alt="">
                                        <h3>Ionic</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/react-2.svg') }}" alt="">
                                        <h3>React Native</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/Flutter-logo.svg') }}" alt="">
                                        <h3>Flutter</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a class="v-tab-head v-tab-link visible-xs" data-target="#designingBuildingTools-tab">Web
                            application</a>
                        <div id="designingBuildingTools-tab" class="collapse fade">
                            <div class="row">
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/php-1.svg') }}" class="w-100" alt="logo">
                                        <h3>PHP</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/react-2.svg') }}" class="w-100" alt="logo">
                                        <h3>ReactJS</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/nodejs.svg') }}" class="w-100" alt="logo">
                                        <h3>Node.js</h3>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/angular-icon-1.svg') }}" class="w-100" alt="logo">
                                        <h3>AngularJS</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/front_end.png') }}" class="w-100" alt="logo">
                                        <h3>Full Stack</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/python.svg') }}" class="w-100" alt="logo">
                                        <h3>Python</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="v-tab-head v-tab-link visible-xs" data-target="#hostingUtilitiesSettings-tab">CMS
                            & e-commerce</a>
                        <div id="hostingUtilitiesSettings-tab" class="collapse fade">
                            <div class="row">
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/WordPress-logo.svg') }}" class="w-100" alt="logo">
                                        <h3>WordPress</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/magento-2.svg') }}" class="w-100" alt="logo">
                                        <h3>Magento</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/drupal.svg') }}" class="w-100" alt="logo">
                                        <h3>Drupal</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="v-tab-head v-tab-link visible-xs" data-target="#marketing-tab">Testing</a>
                        <div id="marketing-tab" class="collapse fade">
                            <div class="row">
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/mobile_testing.png') }}" class="w-100" alt="logo">
                                        <h3>Mobile Testing</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/adobe-illustrator-cc-icon.svg') }}" class="w-100"
                                            alt="logo">
                                        <h3>UI Testing</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/functional.png') }}" class="w-100" alt="logo">
                                        <h3>Functional Testing</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/Performance_Testing.png') }}" class="w-100"
                                            alt="logo">
                                        <h3>Performance Testing</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/User_Acceptance_Testing.png') }}" class="w-100"
                                            alt="logo">
                                        <h3>User Acceptance Testing</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/system-integration.png') }}" class="w-100" alt="logo">
                                        <h3>System Integration Testing</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/api.png') }}" class="w-100" alt="logo">
                                        <h3>API/Web Services Test Automation</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/Manual_Testing.png') }}" class="w-100" alt="logo">
                                        <h3>Manual Testing </h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/Automation_testing.png') }}" class="w-100" alt="logo">
                                        <h3>Automation Testing</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="v-tab-head v-tab-link visible-xs" data-target="#email-tab">UI/UX</a>
                        <div id="email-tab" class="collapse fade">
                            <div class="row">
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/adobe-photoshop-2.svg') }}" class="w-100" alt="logo">
                                        <h3>Adobe Photoshop</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/adobe-illustrator-cc-icon.svg') }}" class="w-100"
                                            alt="logo">
                                        <h3>Adobe Illustrator</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/adobe-xd-1.svg') }}" class="w-100" alt="logo">
                                        <h3>Adobe XD</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/figma-1.svg') }}" class="w-100" alt="logo">
                                        <h3>Figma</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/html-1.svg') }}" class="w-100" alt="logo">
                                        <h3>HTML</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/css-3.svg') }}" class="w-100" alt="logo">
                                        <h3>CSS</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/bootstrap-5-1.svg') }}" class="w-100" alt="logo">
                                        <h3>Bootstrap</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="v-tab-head v-tab-link visible-xs" data-target="#ecommerce-tab">Ecommerce</a>
                        <div id="ecommerce-tab" class="collapse fade">
                            <div class="row">
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/front_end.png') }}" class="w-100" alt="logo">
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/front_end.png') }}" class="w-100" alt="logo">
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="tab-box">
                                        <img src="{{ asset('image/front_end.png') }}" class="w-100" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inquiryform')
@endsection